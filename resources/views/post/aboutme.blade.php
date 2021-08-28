@extends('layouts.app')
@section('content')

<section>

      <div class="container">
        
        <div class="row">
          <div class="col-md-12">
             <hr><center><h3 style="color: green;"><b>About Me</b></h3></center><hr/>

          </div>
        </div>
      </div>
</section>

<section>


        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
            		<img src="images/shamol.jpg" class="img-thumbnail" >   
                </div>
                <div class="col-md-6">
					<div id="contentDiv"></div>
				</div>
            </div>
        </div>

</section>

<script>
const printSentence = (id, sentence, speed = 50) => {
  let index = 0;
  let element = document.getElementById(id);
  
  let timer = setInterval(function() {
    const char = sentence[index];
    
    if (char === '<') {
      index = sentence.indexOf('>', index);  // skip to greater-than
    }
    
    element.innerHTML = sentence.slice(0, index);
    
    if (++index === sentence.length) {
      clearInterval(timer);
    }
  }, speed);
} // printSentence

printSentence(
  'contentDiv',
  'ভরসা রাখুন আপনার যেকোনো ধরনের জরুরী ডকুমেন্ট ডেলিভারির জন্য Jet Courier BD আছে আপনার বিশ্বস্ত সহযোগী হিসেবে।<strong>Jet Courier BD</strong>.<p>ঢাকার যেকোন প্রান্তে প্রোডাক্ট ডেলিভারি, Jet  Courierbd এর সাথে হবে আরও জলদি। আমাদের সুপার ফাস্ট ডেলিভারি সার্ভিস নিয়ে Inside Dhaka প্রোডাক্ট পৌঁছে যাবে কাস্টমারের দরজায়, মাত্র ২৪ঘন্টায়!</p><ul><li>এক্সপ্রেস ডেলিভারি অপশনের মাধ্যমে ৪-৬ ঘন্টার মধ্যে ডেলিভারির জন্য পাবেন। (শুধুমাত্র ঢাকায়)।<li>আমরা ক্যাশ অন ডেলিভারি অর্থাৎ কোন রকম অ্যাডভান্স না দিয়ে ডেলিভারির সময় ক্যাশ প্রদান করে ডেলিভারি রিসিভ করার সুবিধা দিয়ে থাকি।<li>আপনার সকল প্রয়োজনে অথবা জিজ্ঞাসায় আছে কল সেন্টার সাপোর্ট সেন্টার।<li>আপনার ব্যবসার বিশ্বস্ত ও আদর্শ ডেলিভারি সিস্টেম আপনি পাচ্ছেন সিটি এরিয়ার মধ্যে সবচেয়ে দ্রুত ডেলিভারি<li>পার্সেলে আস্থা রাখুন নির্ভয়ে<li>#FastDelivery #SafetyFirst<li>আপনার প্রয়োজনীয় তাই আমাদের কাছে সবচেয়ে বেশি গুরুত্বপূর্ণ।</ul><table><tr><th>Thank You<th>...<tr><td>Connected Us<td>for more information</table>',
  50
);
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			</div>
			<div class="col-md-6">
				<dl>
					<dt>Bread</dt>
					<dd>A baked food made of flour.</dd>
					<dt>Coffee</dt>
					<dd>A drink made from roasted coffee beans.</dd>
				</dl>
			</div>
		</div>
	</div>
</section>

<section>
	 <div class="container">
	
		      
    </div>
	
</section>

@endsection