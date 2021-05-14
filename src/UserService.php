<?php


namespace YaangVu\SisUserHelper;


use YaangVu\Constant\CodeConstant;

class UserService
{
    /**
     * @param string $uid
     * @param string $sid
     *
     * @return mixed
     */
    public static function getRoles(string $uid, string $sid): mixed
    {
        return HttpClient::get("$uid/roles", [CodeConstant::SC_ID => $sid]);
    }

    /**
     * @param string $uid
     * @param string $sid
     *
     * @return mixed
     */
    public static function getPermissions(string $uid, string $sid): mixed
    {
        return HttpClient::get("$uid/permissions", [CodeConstant::SC_ID => $sid]);
    }

    /**
     * @param string $uid
     * @param string $sid
     * @param string $role
     *
     * @return mixed
     */
    public function hasRole(string $uid, string $sid, string $role): mixed
    {
        return HttpClient::get("$uid/has-role", [CodeConstant::SC_ID => $sid, 'role_name' => $role]);
    }

    /**
     * @param string $uid
     * @param string $sid
     * @param string $permission
     *
     * @return mixed
     */
    public function hasPermission(string $uid, string $sid, string $permission): mixed
    {
        return HttpClient::get("$uid/has-role", [CodeConstant::SC_ID => $sid, 'permission_name' => $permission]);
    }


    /**
     * Get User detail
     *
     * @param string $uid
     * @param string $sid
     *
     * @return mixed
     */
    public function get(string $uid, string $sid): mixed
    {
        return HttpClient::get("/$uid", [CodeConstant::SC_ID => $sid]);
    }
}
