@csrf
<div class="form-group pb-2">
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" placeholder="name" value="{{old('name') ?? $customer->name}}">
        <div>{{$errors->first('name')}}</div>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="text" name="email" placeholder="email" value="{{old('email')?? $customer->email}}">
        <div>{{$errors->first('email')}}</div>
    </div>

    <div class="form-group">
        <label for="active">Customer Status</label>
        <select name="active" id="active" class="form-control">
            <option value="" disabled>Select Customer Status</option>
            @foreach($customer->activeOptions() as $activeOpstionKey => $activeOpstionValue)
                    <option value="{{$activeOpstionKey}}" {{$customer->active == $activeOpstionValue ? "selected":""}}>{{$activeOpstionValue}}</option>
            @endforeach
        </select>
        <div>{{$errors->first('active')}}</div>
    </div>

    <div class="form-group">
        <label for="company_id">Company</label>
        <select name="company_id" id="company_id" class="form-control">
            @foreach($companies as $company)
                <option value="{{$company->id}}" {{$company->id==$customer->company_id? 'selected':''}}>{{$company->name}}</option>
            @endforeach
        </select>
        <div>{{$errors->first('company_id')}}</div>
    </div>

