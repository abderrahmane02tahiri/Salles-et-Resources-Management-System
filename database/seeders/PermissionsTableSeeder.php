<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'room_create',
            ],
            [
                'id'    => 18,
                'title' => 'room_edit',
            ],
            [
                'id'    => 19,
                'title' => 'room_show',
            ],
            [
                'id'    => 20,
                'title' => 'room_delete',
            ],
            [
                'id'    => 21,
                'title' => 'room_access',
            ],
            [
                'id'    => 22,
                'title' => 'event_create',
            ],
            [
                'id'    => 23,
                'title' => 'event_edit',
            ],
            [
                'id'    => 24,
                'title' => 'event_show',
            ],
            [
                'id'    => 25,
                'title' => 'event_delete',
            ],
            [
                'id'    => 26,
                'title' => 'event_access',
            ],
            [
                'id'    => 27,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 28,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 29,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 30,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 31,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 32,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 33,
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 34,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 35,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 36,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 37,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 38,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 39,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 40,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 41,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 42,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 43,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 44,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 45,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 46,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 47,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 48,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 49,
                'title' => 'asset_create',
            ],
            [
                'id'    => 50,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 51,
                'title' => 'asset_show',
            ],
            [
                'id'    => 52,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 53,
                'title' => 'asset_access',
            ],
            [
                'id'    => 54,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 55,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
