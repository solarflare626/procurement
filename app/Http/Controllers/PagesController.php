<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\invitation;

class PagesController extends Controller
{
    public function index() {
        $title='Annual Procurement Plan';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function createinvitation() {
        $title='Create Bidding Invitation';
        return view('pages.createinvitation')->with('title', $title);
    }
    public function assignlots(invitation $invitation){
        return view('pages.assignlots', [ 'title'=>'Assign Lots','invitation' => $invitation]);
    }
   
    public function invitation() {
        $title='Invitation to Bid';
        return view('pages.invitation')->with('title', $title);
    }

    public function bidding() {
        $title='Bidder Information';
        return view('pages.bidding')->with('title', $title);
    }

    public function bidderlist() {
        $title='List of Bidders';
        return view('pages.bidderlist')->with('title', $title);
    }

    public function summary() {
        $title='Bidding Summary';
        return view('pages.summary')->with('title', $title);
    }

    public function postqual() {
        $title='Post-Qualification';
        return view('pages.postqual')->with('title', $title);
    }

    public function purchaseorder() {
        $title='Purchase Order';
        return view('pages.purchaseorder')->with('title', $title);
    }
}
