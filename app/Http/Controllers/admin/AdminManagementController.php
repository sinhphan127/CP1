<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminModel;
use Illuminate\Http\Request;

class AdminManagementController extends Controller
{
    private $admin;

    public function __construct()
    {
        $this->admin = new AdminModel();
    }
    public function index(Request $request)
    {
        $title = 'Thông Tin Cá Nhân';

        $adminId = $request->session()->get('adminId');
        $admin = $this->admin->getAdminById($adminId);

        $role = $request->role;


        return view('admin.profile-admin', compact('title', 'admin', 'role'));
    }


    public function admins(Request $request)
    {
        $title = 'Quản lý admin';

        $admins = $this-> admin->getAdmins();

        return view('admin.user-admins', compact('title', 'admins'));

    }

    public function addUserAdmin(Request $request)
    {
        $userName = $request->input('username');
        $fullName = $request->input('fullName');
        $role = $request->input('role');
        $email = $request->input('email');
        $address = $request->input('address');
        $passwd = $request->input('passwd');

        $admin = [
            'fullName' => $fullName,
            'username' =>$userName,
            'password' => md5($passwd),
            'email' => $email,
            'role' => $role,
            'address' => $address,
            'createdDate' => now(),
            'adminId' => now()->getTimestamp(),
        ];
        $createAdmin = $this->admin->addAdminUser($admin);
        return response()->json([
            'success' => true,
            'message'=> 'Add admin success',
            'adminId' => $createAdmin,
        ]);
    }

    public function deleteUserAdmin(Request $request)
    {
        $adminId = $request->input('adminId');
        if ($adminId == null || $adminId == '') {
            return response()->json([
                'success' => false,
                'message'=> 'Delete admin success fails',
            ]);
        }
        $this->admin->deleteAdmin($adminId);
        $admins = $this-> admin->getAdmins();
        return response()->json([
            'success' => true,
            'message'=> 'Delete admin success',
            'data' => view('admin.user-admins', compact('admins'))->render()
        ]);
    }


    public function updateAdmin(Request $request)
    {
        $fullName = $request->fullName;
        $password = $request->password;
        $email = $request->email;
        $address = $request->address;




        $admin = $this->admin->getAdmin();
        $oldPass = $admin->password;

        if ($password != $oldPass) {
            $password = md5($password);
        }


        $dataUpdate = [
            'fullName' => $fullName,
            'password' => $password,
            'email' => $email,
            'address' => $address
        ];
        $update = $this->admin->updateAdmin($dataUpdate);
        $newinfo = $this->admin->getAdmin();
        if ($update) {
            return response()->json(
                [
                    'success' => true,
                    'data' => $newinfo
                ]
            );
        } else {
            return response()->json(['success' => false, 'message' => 'Không có thông tin nào thay đổi!']);
        }
    }

    public function updateAvatar(Request $req)
    {
        // dd($req->all());
        $avatar = $req->file('avatarAdmin');

        // Tạo tên mới cho tệp ảnh
        $filename = 'avt_admin.jpg'; // Tên tệp mới
        unlink(public_path('admin/assets/images/user-profile/avt_admin.jpg'));

        // Di chuyển ảnh vào thư mục public/admin/assets/images/user-profile/
        $update = $avatar->move(public_path('admin/assets/images/user-profile'), $filename);

        if (!$update) {
            return response()->json(['error' => true, 'message' => 'Có vấn đề khi cập nhật ảnh!']);
        }
        return response()->json(['success' => true, 'message' => 'Cập nhật ảnh thành công!']);
    }

}
