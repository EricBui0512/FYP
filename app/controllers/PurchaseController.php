<?php

class PurchaseController extends BaseController {

    /**
     * User Model
     * @var User
     */
    protected $user;

    protected $retailer;

    /**
     * Inject the models.
     * @param Post $post
     * @param User $user
     */
    public function __construct(IUserRepository $user, IDealRepository $deal, Retailer $retailer)
    {
        parent::__construct();

        $this->user = $user;
        $this->deal = $deal;
        $this->retailer = $retailer;
    }
    
	/**
     * Returns all the blog posts.
     *
     * @return View
     */
    public function getBill($id)
    {
        $retailer = null;

        // get list outlet active
        $detail=$this->deal->detail($id);

        if ( ! empty($detail) )
        {
            $retailer = $this->retailer->getById( $detail->outlet_id );
        }

        // Show the page
        return View::make('site.purchase.bill',compact('detail', 'retailer'));
    }
    /**
     * Returns all the blog posts.
     *
     * @return View
     */
    public function editBill($id)
    {
        $tranDetail = DealTransaction::tranDetail( $id );

        // Show the page
        return View::make('site.purchase.edit-bill',compact('tranDetail'));
    }
    /**
	 * Returns all the blog posts.
	 *
	 * @return View
	 */
	public function payBill($id)
	{
        // get list outlet active
        $bill=DealTransaction::find($id);
       
        // Show the page
		 return View::make('site.purchase.pay',compact('bill'));
	}
    /**
     * Returns all the blog posts.
     *
     * @return View
     */
    public function updateBill()
    {
        // get list outlet active
        $validator = Validator::make(Input::all(), DealTransaction::$rules);
        $detail=$this->deal->detail(Input::get('deal_id'));
        
        if(!Auth::user())
            return Redirect::to('purchase/'.$detail->id)->with('message', 'Login please!');;
        
        if ($validator->passes())
        {
            $data=Input::except('_token');
            $bill=DealTransaction::find(Input::get('id'));
            $bill->qty=$data['qty'];
            $bill->phone_number=$data['phone_number'];
            $bill->amount=$data['amount'];
            $bill->total=$data['amount']*$data['qty'];
            if ($bill->save())
            {
                User::where( 'id', Auth::user()->id)->update( array('phone_number' => $data['phone_number']));
                
                return View::make('site.purchase.pay',compact('bill'));
            }
            return Redirect::to('user/transaction/edit/'.Input::get('id'))->withInput()->withErrors($validator);
        }

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
            $bill=new DealTransaction();
            $bill->deal_id=$data['deal_id'];
            $bill->consumer_id=Auth::user()->id;
            $bill->consumer_email=Auth::user()->email;
            $bill->qty=$data['qty'];
            $bill->phone_number=$data['phone_number'];
            $bill->amount=$data['amount'];
            $bill->total=$data['amount']*$data['qty'];
             if ($bill->save())
            {
                // var_dump($Bill->id);die;
               // Redirect to the new country page
                return View::make('site.purchase.pay',compact('bill'));
            }
            return Redirect::to('purchase/'.$detail->id)->withInput()->withErrors($validator);
        }

        // Show the page
        
    }

}
