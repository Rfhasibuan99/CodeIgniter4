<?

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return redirect()->route('login');
    }
}
