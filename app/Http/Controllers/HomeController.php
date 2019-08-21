<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gibTrip;
use App\gib;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $gibs = gib::take(10)->get();
        return view('home', compact('gibs', $gibs));
    }

    public function loadMore(Request $request)
    {

        if ($request->ajax()) {

            if ($request->id != 'start') {
                $data = gib::take(10)->where('id', '<', $request->id)->orderBy('id', 'DESC')->get();
            } else {
                $data = gib::take(10)->orderBy('id', 'DESC')->orderBy('id', 'DESC')->get();
            }

            $output = '';
            $last_id = '';

            $moenyIconPath = asset('\img\default\money.png');
            if (!$data->isEmpty()) {
                foreach ($data as $gib) {
                    $output .= '
        <div class="card gibu-card" >
                <div class="card-body">
                    <h5 class="card-title"> <div class="left">' . $gib->route->source . '</div><div class="right"> R <span class="price-tag">' . $gib->price . '.00</span></div></h5>
                    <h6 class="card-subtitle mb-2 text-muted">To</h6>
                    <h6 class="card-title">' . $gib->route->destination . '</h6>

                    <h6 class="card-subtitle mb-2 text-muted">Driver <span class="driver-name"></span> ' . $gib->driver->user->profile->first_name . ' ' .  $gib->driver->user->profile->last_name . ' </span></h6>
                    <p class="card-text">' . $gib->special_note . '</p>
                    <a href="#" class="card-link">View</a>
                    <a href="#" class="card-link">Book</a>

                    <div class="available-seats">
                            <a href="#" class="card-link"><img src="img/default/available-seats.png" alt="" srcset="" style="
                                height: 25px;
                            "></a>

<a href="#" class="card-link">' . $gib->seats . '</a>

<span class="tooltiptext">available seats</span>
                    </div>

                </div>
            </div>
                    ';

                    $last_id = $gib->id;
                }
                $output .= '
       <div id="load_more">
        <button type="button" name="load_more_button" class="load_more btn btn-success form-control" data-id="' . $last_id . '" id="load_more_button">Load More</button>
       </div>
       ';
            } else {
                $output .= '
       <div id="load_more" >
        <button type="button" name="load_more_button" class="load_more btn btn-info form-control">No Data Found</button>
       </div>
       ';
            }
            echo $output;
        }
    }

    public function waiting()
    { }
}
