<div class="form-group">
    <label>Amount</label>
    <div class="input-group">
        <span class="input-group-addon">$</span>
        <input type="text" class="form-control" name="amount" value="{{ old('amount', $payment->getCurrencyFormat($payment->amount)) }}">
    </div>
</div>