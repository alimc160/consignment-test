@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="post" action="{{ route('consignments.store') }}">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <label for="">Company</label>
                        <input type="text" name="company" value="{{ old('company') }}"  class="form-control @error('company') is-invalid @enderror" placeholder="company">
                    </div>

                    <div class="col-6">
                        <label for="">Contact</label>
                        <input type="text" name="contact" value="{{ old('contact') }}" class="form-control @error('contact') is-invalid @enderror" placeholder="Contact">
                    </div>

                    <div class="col-6">
                        <label for="">Address Line 1</label>
                        <input type="text" name="addressline1" value="{{ old('addressline1') }}" class="form-control @error('addressline1') is-invalid @enderror" placeholder="Address Line 1">
                    </div>

                    <div class="col-6">
                        <label for="">Address Line 2</label>
                        <input type="text" name="addressline2" value="{{ old('addressline2') }}" class="form-control @error('addressline2') is-invalid @enderror" placeholder="Address Line 2">
                    </div>

                    <div class="col-6">
                        <label for="">Address Line 3</label>
                        <input type="text" name="addressline3" value="{{ old('addressline3') }}" class="form-control @error('addressline3') is-invalid @enderror" placeholder="Address Line 3">
                    </div>

                    <div class="col-6">
                        <label for="">Country</label>
                        <input type="text" name="country" value="{{ old('country') }}" class="form-control @error('country') is-invalid @enderror" placeholder="Country">
                    </div>

                    <div class="col-6">
                        <label for="">City</label>
                        <input type="text" name="city" value="{{ old('city') }}" class="form-control @error('city') is-invalid @enderror" placeholder="City">
                    </div>
                    <div class="col-12 mt-3">
                        <button class="btn btn-secondary">Add Consignment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection