<div class="form-group">
    <label>Project</label>
    <select name="project_id" class="form-control">
        @foreach($projects as $key => $name)
            <option value="{{ $key }}" {{ old('project_id', $invoice->project_id) == $key ? 'selected' : '' }}>{{ $name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Amount</label>
    <div class="input-group">
        <span class="input-group-addon">$</span>
        <input type="text" class="form-control" name="amount" value="{{ old('amount', $invoice->getCurrencyFormat($invoice->amount)) }}">
    </div>
</div>

<div class="form-group">
    <label>Due At</label>
    <input type="text" class="form-control" name="due_at" value="{{ old('due_at', $invoice->due_at) }}">
</div>