<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\DailyScheduleAndPromo;

class DailyScheduleAndPromoController extends Controller
{		
	public function ajaxShow(Request $request) {
		$schedule_and_promo = DailyScheduleAndPromo::all();
		$data = array();

  	foreach($schedule_and_promo as $row) {
      $day = 	'<td>
	                <h6>'.$row->day.'</h6>
	             	</td>';
      $event_promo = '<td>'.$row->event_promo.'</td>';
      $button = '<td>
                    <a id="btn-edit-schedule-and-promo" class="btn-fab btn-success r5 white-text" data-id="'. $row->id.'" data-day="'.$row->day.'" data-event-promo="'.$row->event_promo.'" data-toggle="modal" data-target="#modal-edit-schedule-promo">
                        <i class="icon-edit"></i>
                    </a>
                    <a id="btn-delete-schedule-and-promo" class="btn-fab btn-danger r5 white-text" data-id="'.$row->id.'" data-day="'.$row->day.'" data-toggle="modal" data-target="#modal-delete-schedule-promo">
                        <i class="icon-trash"></i>
                    </a>
                </td>';

  		$data[] = array(
                  $day,
                  $event_promo,
                  $button
      );
  	}

  	$output = array(
      "data" => $data
    );

		return response()->json($output);
	}

  public function ajaxStore(Request $request) {
  	$schedule_and_promo = new DailyScheduleAndPromo;

		$schedule_and_promo->day = $request->txt_schedule_day;
		$schedule_and_promo->event_promo = $request->txt_event_promo;
		$schedule_and_promo->updated_at = null;

		$schedule_and_promo->save();

		return response()->json($schedule_and_promo);
  }

  public function ajaxUpdate(Request $request) {
		$schedule_promo = DailyScheduleAndPromo::find($request->hdn_schedule_promo_id);

		$schedule_promo->day = $request->txt_edit_schedule_day;
		$schedule_promo->event_promo = $request->txt_edit_event_promo;

		$schedule_promo->save();

		return response()->json($schedule_promo);
	}

	public function ajaxDestroy(Request $request) {
		$schedule_promo = DailyScheduleAndPromo::find($request->hdn_delete_schedule_promo_id);

		$schedule_promo->delete();
    return response()->json($schedule_promo);
	}

	public function ajaxShowDailySchedulePromo(Request $request) {
		$schedule_promo = DailyScheduleAndPromo::all();

		return response()->json($schedule_promo);
	}
}
