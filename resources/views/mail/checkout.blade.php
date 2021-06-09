<!DOCTYPE html>
<html>

<head>
   
    <style>
      
        
        .invoice-box {
            max-width: 800px;
            margin: auto;
              margin-bottom: 0; 
            padding-left: 30px;
               padding-top: 30px; 
               padding-right:0px;
               padding-bottom:0px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            color: #000;
         
background: #fff;
/*background: linear-gradient(45deg, #fff 83%, #3ea1f1 83%, #3ea1f1 90%, oranged 90%);*/
/*border-bottom: 60px solid oranged;*/
        }
        
        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }
        
        .invoice-box table td {
            padding: 8px;
            vertical-align: top;
        }
        .padding{
            padding-left:450px;
        }
     
        
        .invoice-box table tr.top table td {
            padding-bottom: 30px;
        }
        
        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }
        
        .invoice-box table tr.information table td {
            padding-bottom: 70px;
        }
    
        .invoice-box table tr.heading td {
            border-bottom: 5px solid orangered;
            font-weight: bold;
            padding-left:1rem;
            padding-right:1rem;
padding-top: 1rem;
padding-bottom: 1rem;

        }
        
        .invoice-box table tr.details td {
            border-bottom: 5px solid orangered;

            padding-bottom: 20px;
        }
        .invoice-box table tr.details td:last-child {
           

            padding-bottom: 20px;
        }
        
      
        
        .invoice-box table tr.total td {
            border-top: 5px solid orangered;
            border-bottom: 5px solid orangered;
           
        }
       
        @media only screen and (max-width: 600px) {
            .padding{
            padding-left:0px;
        }
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }
            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
         
        }
        /** RTL **/
        
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }
        
        .rtl table {
            text-align: right;
        }
        
        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
        p{
            font-size: 24.5px;
            margin: 0!important; 
            padding: 0!important;
            line-height: 1.3;
            font-weight:300;
        }
        .text{
            padding-left: 4rem;;
        }
        .bill h3,.invoice h3{
            color:orangered;
            font-size: 1.8rem;
            font-weight: 700;
        }

    </style>
</head>

<body>
    <div class="invoice-box">
     

        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="4">
                    <table>
                        <tr>
                            <td class="title">
                              <a href="https://somervillecommunication.com/">
                                    <img src="{{ asset('somerville.png') }}" style="width: 100%; max-width: 400px" />
                              </a>
                          <div class="text">
                              
                                
                            <p>
                         44/115 Robinson road East

                              </p>
                              <p>
                                Geebung Qld 4034, Brisbane

                              </p>
                          </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="4">
                    <table>
                        <tr>
                           <td>
                               <div class="invoice">
                                <h3>Invoice</h3> 
                      
                                 Invoice #: OC{{1000+$order_id}}<br /> 
                                 
                               {{\Carbon\Carbon::parse($order_date)->format('d- M-Y')}}
                               <br>
                               Payment method:{{$payment_type}}
                               </div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                             <td>
                            <div class="bill">
                                <h3>Bill to</h3>
                            {{$ship_name}}
                            <br>
                               {{$ship_email}}
                                <br>
                                {{$ship_phone}}
                                   <br>
                                {{$ship_address}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

   
            <tr class="heading" >
                <td >Item</td>
                  <td > Quantity</td>
                    <td >Unit Price</td>
                      <td >Total Price</td>

               
            </tr>
@php $grandtotal=0; @endphp
@foreach ($cart as $item)
@php 
$grandtotal +=$item->price*$item->qty;
@endphp
            <tr class="item">
                <td>  {{$item->name}}
     
                
                </td>

                <td> {{$item->qty}}</td>
                 <td>  ${{$item->price}}</td>
                  <td>   ${{$item->price*$item->qty}}</td>
                  
            </tr>
           @endforeach
        
            <tr class="total">
                
                <td colspan='4'>
                    
                <div class="padding">
                    Cart Value : ${{ $grandtotal}}
                  <br/>Coupon ({{ $coupon }}):{{ $coupon_value }}%
                  <br/>Shipping Charge : ${{$shipping}}
                  <br/> Tax : ${{$tax}} %
               

                               Total:  ${{$total}}
                </div>
                    </td>    
       
            </tr>
         
        </table>
    </div>
</body>

</html>