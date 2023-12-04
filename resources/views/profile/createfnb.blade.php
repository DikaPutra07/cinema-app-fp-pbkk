@extends('layouts.layout')

@section('content')

<div class="container">
    {{-- <h1 class="mt-5 mb-0" style="color: #3e4555">Edit {{ $fnb->name }}</h1> --}}
    <hr>
    <div class="row">
        <!-- left column -->
        {{-- <div class="col-md-3">
            <div class="text-center">
                <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                <h6>Upload a different photo...</h6>

                <input type="file" class="form-control">
            </div>
        </div> --}}

        <!-- create form column -->
        <div class="col personal-info">
            <h3 class="mt-0">Personal info</h3>

            <form class="form-horizontal" role="form" method="POST"  action="{{ route('foodandbeverages-store') }}" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label class="col-lg-3 control-label">Product Name:</label>
                    <div class="col-lg-8">
                        <input name="name" class="form-control" type="text" value="{{ old('name') }}">
                        @include('components.error-message',['field_name' => 'name'])
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Product Price:</label>
                    <div class="col-lg-8">
                        <input name="price" class="form-control" type="text" value="{{ old('price') }}">
                        @include('components.error-message',['field_name' => 'price'])
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Product Image:</label>
                    <div class="col-lg-8">
                        <input name="image" class="form-control" type="file" value="{{ old('image') }}">
                        @include('components.error-message',['field_name' => 'image'])
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Product Category:</label>
                    <div class="col-lg-8">
                        <select name="food_beverage_category_id" class="form-control">
                            @foreach ($foodBeverageCategories as $fbc)
                                <option value="{{ $fbc->id }}">{{ $fbc->name }}</option>
                            @endforeach
                        </select>
                        @include('components.error-message',['field_name' => 'food_beverage_category_id'])
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Product Description:</label>
                    <div class="col-lg-8">
                        {{-- <input name="description" class="form-control" type="text" value="{{ $fnb->description }}"> --}}
                        <textarea name="description" class="form-control"></textarea>
                        @include('components.error-message',['field_name' => 'description'])
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        {{-- <input type="button" class="btn btn-primary" value="Save Changes"> --}}
                        <button type="submit" class="btn btn-main">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>

@endsection