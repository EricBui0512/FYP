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
    public function __construct(IUserRepository $user, IDealRepository $deal)
    {
        parent::__construct();

        $this->user = $user;
        $this->deal = $deal;
    }
    
	/**
     * Returns all the blog posts.
     *
     * @return View
     */
    public function getBill($id)
    {
        // get list outlet active
         $detail=$this->deal->detail($id);
        // Show the page
        return View::make('site.purchase.bill',compact('detail'));
    }
    /**
	 * Returns all the blog posts.
	 *
	 * @return View
	 */
	public function editBill($id)
	{
        // get list outlet active
        $transactions=DealTransaction::find($id);
        $detail=$this->deal->detail($transactions->deal_id);
        // Show the page
		return View::make('site.purchase.edit-bill',compact('detail','transactions'));
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
        $detail=$this->deal->detail(Input::get('deal_id'));
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
            $Bill->phone_number=$data['phone_number'];
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
