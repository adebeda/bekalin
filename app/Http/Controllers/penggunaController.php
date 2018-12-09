<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Konsultasi;
use App\Http\Requests;
use Session;
use App\Role;
use App\Permission;
use App\User;
use App\Authorizable;
use Illuminate\Support\Facades\Auth;
use Validator;


class penggunaController extends Controller
{
    public function viewPengguna(){
        // if(!auth()->user()->hasPermissionTo('view_pengguna')){
        //     return redirect()->back();
        // };

    	$pengguna = User::all();
    	// dd($pengguna);
        return view('pengguna', ['pengguna' => $pengguna]);
    }

 public function viewPengguna2($id){
        // if(!auth()->user()->hasPermissionTo('view_pengguna')){
        //     return redirect()->back();
        // };
		$pengguna = User::find($id);
		// dd($pengguna->roles);
		// dd($pengguna->name);
        $roles = Role::pluck('name', 'id')->all();
        // dd($roles);
        $permissions = Permission::all('name', 'id');

        // dd($pengguna->hasPermissionTo('view_analisa_all'));
        return view('penggunaAkses', compact('pengguna', 'roles', 'permissions'));
    }


     public function viewAksesPengguna($id){
     	// dd($id);
        $pengguna = User::find($id);
        $roles = Role::pluck('name', 'id');
        $permissions = Permission::all('name', 'id');
        // dd($pengguna->hasPermissionTo('view_analisa_all'));
        return view('pengguna_akses', compact('pengguna', 'roles', 'permissions'));
    }

    public function editAksesPengguna(Request $request){
       $data = $request->all();
        
        $pengguna = User::find($request->id);
        // dd($pengguna);

        // Handle the user permissions
        $this->syncPermissions($request, $pengguna);

        $pengguna->save();

        return redirect('/pengguna');
    }
      private function syncPermissions(Request $request, $pengguna){
        // Get the submitted roles
        $roles = $request->get('roles', []);
        $permissions = $request->get('permissions', []);

        // Get the roles
        $roles = Role::find($roles);

        // check for current role changes
        if( ! $pengguna->hasAllRoles( $roles ) ) {
            // reset all direct permissions for user
            $pengguna->permissions()->sync([]);
        } else {
            // handle permissions
            $pengguna->syncPermissions($permissions);
        }

        $pengguna->syncRoles($roles);

        return $pengguna;
    }    
}
