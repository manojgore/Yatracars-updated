<?php
namespace App\Http\Controllers\Corporate;
use App\Models\User;
use App\Models\Admin;
use App\Models\Crp;
use App\Models\Listing;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class DashboardControllerCrp extends Controller
{
    public function __construct() {
        $this->middleware('auth.admin:admin');
    }

    public function crp() {
        $total_active_customers = User::where('status', 'Active')->count();
        $total_pending_customers = User::where('status', 'Pending')->count();
        $total_active_listings = Listing::where('listing_status', 'Active')->count();
        $total_pending_listings = Listing::where('listing_status', 'Pending')->count();
        
        return view('corporate.app_crp', compact('total_active_customers','total_pending_customers','total_active_listings','total_pending_listings'));
    }
}