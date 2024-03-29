<?php

namespace App\Http\Controllers;

use App\Models\bill;
use App\Models\clime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use App\Mail\climeSubmitted;
use Illuminate\Support\Facades\Mail;
use App\Exports\billExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Jobs\TestSendEmail;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function add(Request $req)
    {
        // dd($req);
        return view('add');
    }




    public function addBill(Request $req)
    {
        // dd($req,$req->bdate!="" && $req->bfrompincode !="" && $req->bfromplace !="" &&  $req->btopincode !="" && $req->btoplace !="" && $req->bmode !="" && $req->bkm !="" && $req->bamount != "");
        try {
            if($req->bdate!="" && $req->bfrompincode !="" && $req->bfromplace !="" &&  $req->btopincode !="" && $req->btoplace !="" && $req->bmode !="" && $req->bkm !="" && $req->bamount != "")
            {
                $buser=$req->user()->id;
                $bdate=$req->bdate;
                $bfrompincode=$req->bfrompincode;
                $bfromplace=$req->bfromplace;
                $btopincode=$req->btopincode;
                $btoplace=$req->btoplace;
                $bmode=$req->bmode;
                $bkm=$req->bkm;
                $bda=$req->bda;
                $bamount=$req->bamount;
                // $bcid=$req->bcid;

                $b= new bill;

                $b->buser=$buser;
                $b->bdate=$bdate;
                $b->bfrompincode=$bfrompincode;
                $b->bfromplace=$bfromplace;
                $b->btopincode=$btopincode;
                $b->btoplace=$btoplace;
                $b->bmode=$bmode;
                $b->bkm=$bkm;
                $b->bda=$bda;
                $b->bamount=$bamount;
                // $b->bcid=$bcid;
                if($b->save())
                {
                    return response(["status"=>"success","message"=>"Bill Sucessfully Added","data"=>$this->getManualRecentBill($buser)]);
                }
                else{
                    return response(["status"=>"error","message"=>"Somthing Went Worng"]);
                }

            }
            else{
                return response(["status"=>"warning","message"=>"Must Fill All The Fields"]);
            }
          }

          catch(\Exception $e) {
            // echo 'Message: ' .$e->getMessage();
            return response(["status"=>"error","message"=>$e->getMessage()]);
          }




    }



    public function updateBill(Request $req)
    {
        // dd($req,$req->bdate!="" && $req->bfrompincode !="" && $req->bfromplace !="" &&  $req->btopincode !="" && $req->btoplace !="" && $req->bmode !="" && $req->bkm !="" && $req->bamount != "");
        try {
            if($req->bdate!="" && $req->bfrompincode !="" && $req->bfromplace !="" &&  $req->btopincode !="" && $req->btoplace !="" && $req->bmode !="" && $req->bkm !="" && $req->bamount != "")
            {
                $bid= Crypt::decrypt($req->id,false);
                $buser=$req->user()->id;
                $bdate=$req->bdate;
                $bfrompincode=$req->bfrompincode;
                $bfromplace=$req->bfromplace;
                $btopincode=$req->btopincode;
                $btoplace=$req->btoplace;
                $bmode=$req->bmode;
                $bkm=$req->bkm;
                $bda=$req->bda;
                $bamount=$req->bamount;
                // $bcid=$req->bcid;


                // $flight = Flight::find(1);

                // $flight->name = 'Paris to London';

                // $flight->save();



                $b=bill::find($bid);

                $b->buser=$buser;
                $b->bdate=$bdate;
                $b->bfrompincode=$bfrompincode;
                $b->bfromplace=$bfromplace;
                $b->btopincode=$btopincode;
                $b->btoplace=$btoplace;
                $b->bmode=$bmode;
                $b->bkm=$bkm;
                $b->bda=$bda;
                $b->bamount=$bamount;
                // $b->bcid=$bcid;
                if($b->save())
                {
                    return response(["status"=>"success","message"=>"Bill Sucessfully Updated","data"=>$this->getManualRecentBill($buser)]);
                }
                else{
                    return response(["status"=>"error","message"=>"Somthing Went Worng"]);
                }

            }
            else{
                return response(["status"=>"warning","message"=>"Must Fill All The Fields"]);
            }
          }

          catch(\Exception $e) {
            // echo 'Message: ' .$e->getMessage();
            return response(["status"=>"error","message"=>$e->getMessage()]);
          }




    }


    public function getBills(Request $req)
    {

        try{

            $user= $req->user()->id;
            $data= bill::where('buser', '=', $user)
            ->where('bcid', '=', null)
            ->get()->toArray();
            if(count($data)>0)
            {
                 // dd($data);
            $count=1;
            $htmlData="";
            foreach($data as $d)
            {
                $mask_id=Crypt::encryptString($d["id"]);
                $htmlData.=
                '
                <div class=" bg-[#eff6ff]  p-2 mx-2 mt-2 shadow duration-300 hover:bg-[#dbeafe] hover:shadow-xl rounded-md">
                <div class="ctop flex justify-between items-center">
                    <div id="billcard_'.$mask_id.'" onclick="toggle_selected(\''.$mask_id.'\','.$count.')" class="sno px-3 py-1 font-extrabold text-white text-sm bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full  ">'.$count.'</div>
                    <div class="date font-medium"><i class="fa fa-calendar-alt text-blue-700 font-medium"></i> '.$d["bdate"].'</div>
                    <div class="edit flex">
                    <i id="deletebtn_'.$mask_id.'" onclick="delete_bill(\''.$mask_id.'\')" class="mx-2 fa fa-trash text-red-700 font-medium"></i>
                    <i id="editbtn_'.$mask_id.'" onclick="edit_bill(\''.$mask_id.'\')" class="mx-2 fa fa-pen text-blue-700 font-medium"></i>
                    </div>
                </div>

                <div class="from-to pt-3 flex justify-evenly font-medium">
                    <div class="from">'.$d["bfromplace"].'</div>
                    <div class=" ">-- <i class="text-blue-700  fa fa-'.($d["bmode"]=="bike"?"motorcycle":"bus").' "></i> --</div>
                    <div class="to">'.$d["btoplace"].'</div>
                </div>

                <div class="cbottom pt-3 flex">
                    <div class="flex justify-between w-9/12 font-medium">
                        <div class="da"><i class="text-blue-700 font-medium fa fa-soup"></i>'.$d["bda"].'/-</div>
                        <div class="km"></i>'.$d["bkm"].'KM</div>
                        <div class="price"><i class="text-blue-700 font-medium fa fa-wallet"></i> '.$d["bamount"].'/-</i></div>
                    </div>
                    <div class="w-3/12 justify-end flex font-extrabold"><i class="text-blue-700 font-medium fa fa-file-invoice-dollar"></i>&nbsp'.($d["bamount"]+$d["bda"]).'/-</div>
                </div>
            </div>



                '
                ;
            $count++;
            }

            return response(["status"=>"success","message"=> "Bills Sucessfully Fetched","data"=>$htmlData]);

            }
            else{
            return response(["status"=>"warning","message"=> "No Bills Found 🤷‍♂️","data"=>[]]);

            }

        }
        catch(\Exception $e) {
            // echo 'Message: ' .$e->getMessage();
            return response(["status"=>"error","message"=>$e->getMessage()]);
          }

    }


    public function getRecentBill(Request $req)
    {

        // try{
            $user= $req->user()->id;
            $data= bill::where('buser', '=', $user)
            ->where('bcid', '=', null)
            ->orderby('created_at')
            ->get()->last()->toArray();

            $d=$data;
            // dd($data);
            $count=1;
            $htmlData="";

                $htmlData.=
                '
                <div class=" bg-[#eff6ff]  p-2 mx-2 mt-2 shadow duration-300 hover:bg-[#dbeafe] hover:shadow-xl rounded-md">
                <div class="ctop flex justify-between items-center">
                    <div class="sno px-3 py-1 font-extrabold text-white text-sm bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full  ">'.$count++.'</div>
                    <div class="date font-medium"><i class="fa fa-calendar-alt text-blue-700 font-medium"></i> '.$d["bdate"].'</div>
                    <div class="edit"><i class="fa fa-pen text-blue-700 font-medium"></i></div>
                </div>

                <div class="from-to pt-3 flex justify-evenly font-medium">
                    <div class="from">'.$d["bfromplace"].'</div>
                    <div class=" ">-- <i class="text-blue-700  fa fa-'.($d["bmode"]=="bike"?"motorcycle":"bus").' "></i> --</div>
                    <div class="to">'.$d["btoplace"].'</div>
                </div>

                <div class="cbottom pt-3 flex">
                    <div class="flex justify-between w-9/12 font-medium">
                        <div class="da"><i class="text-blue-700 font-medium fa fa-soup"></i>'.$d["bda"].'/-</div>
                        <div class="km"></i>'.$d["bkm"].'KM</div>
                        <div class="price"><i class="text-blue-700 font-medium fa fa-wallet"></i> '.$d["bamount"].'/-</i></div>
                    </div>
                    <div class="w-3/12 justify-end flex font-extrabold"><i class="text-blue-700 font-medium fa fa-file-invoice-dollar"></i>&nbsp'.($d["bamount"]+$d["bda"]).'/-</div>
                </div>
            </div>



                '
                ;


            return response(["status"=>"success","message"=> "Bills Sucessfully Fetched","data"=>$htmlData]);
        //}

        // catch(\Exception $e) {
        //     // echo 'Message: ' .$e->getMessage();
        //     return response(["status"=>"error","message"=>$e->getMessage()]);
        //   }

    }

    public function getBillById(Request $req)
    {
        try{
            $id = Crypt::decrypt($req->id,false);
            $b = bill::find($id);
            // dd($b);
            if($b)
            {
                return response(["status"=>"success","message"=>"Bill Sucessfully Fetched","data"=>$b]);
            }
            else{
                return response(["status"=>"warning","message"=>"No Bill Found Using This Id","data"=>[]]);
            }
        }
        catch(\Exception $e) {

                return response(["status"=>"error","message"=>$e->getMessage()]);
        }

    }

    public function getManualRecentBill($uid)
    {

        // try{
            $user= $uid;
            $data= bill::where('buser', '=', $user)
            ->where('bcid', '=', null)
            ->orderby('created_at')
            ->get()->last()->toArray();

            $d=$data;
            // dd($data);
            $count=1;
            $htmlData="";

                $htmlData.=
                '
                <div class=" bg-[#eff6ff]  p-2 mx-2 mt-2 shadow duration-300 hover:bg-[#dbeafe] hover:shadow-xl rounded-md">
                <div class="ctop flex justify-between items-center">
                    <div class="sno px-3 py-1 font-extrabold text-white text-sm bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full  ">Recent</div>
                    <div class="date font-medium"><i class="fa fa-calendar-alt text-blue-700 font-medium"></i> '.$d["bdate"].'</div>
                    <div class="edit"><i class="fa fa-pen text-blue-700 font-medium"></i></div>
                </div>

                <div class="from-to pt-3 flex justify-evenly font-medium">
                    <div class="from">'.$d["bfromplace"].'</div>
                    <div class=" ">-- <i class="text-blue-700  fa fa-'.($d["bmode"]=="bike"?"motorcycle":"bus").' "></i> --</div>
                    <div class="to">'.$d["btoplace"].'</div>
                </div>

                <div class="cbottom pt-3 flex">
                    <div class="flex justify-between w-9/12 font-medium">
                        <div class="da"><i class="text-blue-700 font-medium fa fa-soup"></i>'.$d["bda"].'/-</div>
                        <div class="km"></i>'.$d["bkm"].'KM</div>
                        <div class="price"><i class="text-blue-700 font-medium fa fa-wallet"></i> '.$d["bamount"].'/-</i></div>
                    </div>
                    <div class="w-3/12 justify-end flex font-extrabold"><i class="text-blue-700 font-medium fa fa-file-invoice-dollar"></i>&nbsp'.($d["bamount"]+$d["bda"]).'/-</div>
                </div>
            </div>



                '
                ;


            return $htmlData;

    }


    public function deleteBill(Request $req)
    {
        try{
            $id = Crypt::decrypt($req->id,false);

            $b = bill::find($id);
            if($b)
            {
                if($b->delete())
                {
                    return response(["status"=>"success","message"=>"Bill Sucessfully Deleted","data"=>$b]);
                }

            }
            else{
                return response(["status"=>"warning","message"=>"No Bill Found Using This Id","data"=>[]]);
            }


        }
        catch(\Exception $e) {

            return response(["status"=>"error","message"=>$e->getMessage()]);
        }
    }


    public function deleteBills(Request $req)
    {
        try{

            $ids=json_decode($req->ids);
            // dd($ids);
            $deleted_records=[];
            foreach($ids as $raw_id)
            {

                $id = Crypt::decrypt($raw_id,false);

                $b = bill::find($id);
                if($b)
                {
                    array_push($deleted_records,$b);
                    $b->delete();

                }
            }



            return response(["status"=>"success","message"=>"Bill Sucessfully Deleted ".count($deleted_records)." Recordes ","data"=>$deleted_records]);

            // else{
            //     return response(["status"=>"warning","message"=>"No Bill Found Using This Id","data"=>[]]);
            // }


        }
        catch(\Exception $e) {

            return response(["status"=>"error","message"=>$e->getMessage()]);
        }
    }


    public function addClime(Request $req)
    {
        try {

            $user= $req->user()->id;
            $uname= $req->user()->name;
            $uemail=$req->user()->email;
            // dd($uemail);

            $data= bill::where('buser', '=', $user)
            ->where('bcid', '=', null)
            ->get()->toArray();

            // dd(count($data));

            if(count($data)>0)
            {
                $sum_da= bill::where('buser', '=', $user)
                ->where('bcid', '=', null)
                ->sum('bda');

                $sum_ta= bill::where('buser', '=', $user)
                ->where('bcid', '=', null)
                ->sum('bamount');

                $camount=$sum_da+$sum_ta;


                $c = new clime;
                $c->cuser=$user;
                $c->camount=$camount;
                $c->cstatus="Submitted";

                if($c->save())
                {
                    $b=bill::where('buser', $user)
                    ->where('bcid', null)
                    ->update(['bcid' => $c->id]);

                    if($b)
                    {
                        $this->send_mail
                        (
                            [
                                "cid"=>$c->id,
                                "uname"=>$uname,
                                "email"=>$uemail
                            ]
                        );
                        
                        return response(["status"=>"success","message"=>"Clime Sucessfully Submitted","data"=>["clime"=>$c,"bills"=>$b]]);
                    }
                    else{
                        return response(["status"=>"error","message"=>"Clime Created But Not Linked To Bills"]);
                    }

                }
                else{
                    return response(["status"=>"error","message"=>"Error While Creating Clime"]);
                }
            }
            else{
                return response(["status"=>"warning","message"=>"No Bills Found"]);
            }


        } catch (\Exception $e) {

            return response(["status"=>"error","message"=>$e->getMessage()]);

        }
    }


    public function send_mail($data)
    {
        $emailJobs = new TestSendEmail($data);
        $this->dispatch($emailJobs);

        return true;

    }

    public function test_mail(Request $req)
    {

        return response(["status"=>"success","message"=>"Mail Sucessfully Sent","data"=>[]]);


    }

    public function test_mail_view(Request $req)
    {

        return view('vendor.laravel.framework.src.Illuminate.Mail.resources.views.html.message',["level"=>1,"introLines"=>[],"outroLines"=>[]]);


    }

    public function export()
    {
        return Excel::download(new billExport(5), 'bills.xlsx');

    }


}
