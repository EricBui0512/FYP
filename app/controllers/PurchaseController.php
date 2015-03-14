<?php

class PurchaseController extends BaseController {

    /**
     * User Model
     * @var User
     */
    protected $user;

    /**
     * Inject the models.
     * @param Post $post
     * @param User $user
     */
    public function __construct(User $user)
    {
        parent::__construct();

        $this->user = $user;
    }
    
	/**
	 * Returns all the blog posts.
	 *
	 * @return View
	 */
	public function getBill($id)
	{
        // get list outlet active
		 $detail=Deal::detail($id);
        // Show the page
		return View::make('site.purchase.bill',compact('detail'));
	}
    /**
     * Returns all the blog posts.
     *
     * @return View
     */
    public function createBill()
    {
        // Validate the inputs
        

        $validator = Validator::make(Input::all(), DealTransaction::$rules);
        $detail=Deal::detail(Input::get('deal_id'));
        if(!Auth::user())
            return Redirect::to('purchase/'.$detail->id)->with('message', 'Login please!');;
        if ($validator->passes())
        {
            $data=Input::except('_token');
            $Bill=new DealTransaction();
            $Bill->deal_id=$data['deal_id'];
            $Bill->consumer_id=Auth::user()->id;
            $Bill->consumer_email=Auth::user()->email;
            $Bill->qty=$data['qty'];
            $Bill->amount=$data['amount'];
            $Bill->total=$data['amount']*$data['qty'];
             if ($Bill->save())
            {
                // var_dump($Bill->id);die;
               // Redirect to the new country page
                return View::make('site.purchase.pay',compact('Bill'));
            }
            return Redirect::to('purchase/'.$detail->id)->withInput()->withErrors($validator);
        }

        // Show the page
        
    }

}
