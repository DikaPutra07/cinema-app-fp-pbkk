<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12">
            <div class="card mx-auto p-3">
                <form class="card-details ">
                    <div class="fnb-payment-container" @error('fnb-order-payment') style="border: 1px solid red;" @enderror>
                        @foreach ($payments as $payment)
                            <label class="fnb-payment-label">
                                <input type="radio" name="payment_id" value="{{ $payment->id }}">
                                <img src="{{ asset($payment->image) }}">
                                <span>{{ $payment->method }}</span>
                            </label>
                        @endforeach
                        <p id="payment-id-error" class="text-danger"></p>
                    </div>
                    <div class="form-group mb-3 mt=3">
                        <p class="text-warning mb-0">Card or Phone Number</p> <input type="text" name="card_number" placeholder="1234 5678 9012 3457" size="17" id="cno" minlength="19" maxlength="19">
                        <p id="card-number-error" class="text-danger"></p>
                    </div>
                    <div class="form-group">
                        <p class="text-warning mb-0">Account's Name</p> <input type="text" name="card_name" placeholder="Name" size="17">
                        <p id="card-name-error" class="text-danger"></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>