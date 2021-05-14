<?php


namespace YaangVu\SisUserHelper;


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
        return HttpClient::get("$uid/roles", ['sid' => $sid]);
    }

    /**
     * @param string $uid
     * @param string $sid
     *
     * @return mixed
     */
    public static function getPermissions(string $uid, string $sid): mixed
    {
        return HttpClient::get("$uid/permissions", ['sid' => $sid]);
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
        return HttpClient::get("$uid/has-role", ['sid' => $sid, 'role_name' => $role]);
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
        return HttpClient::get("$uid/has-role", ['sid' => $sid, 'permission_name' => $permission]);
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
        return HttpClient::get("/$uid", ['sid' => $sid]);
    }
}
