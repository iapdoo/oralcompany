@extends('admin.layouts.master')
@section('content')
    <form action="{{route('clients.store')}}" method="post">
        @include('admin.includes.alerts.massage')
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">الاسم</label>
                <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="الاسم">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">رقم الملف</label>
                <input type="text" class="form-control" name="fileNumber" id="inputPassword4" placeholder="رقم الملف">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">الرقم القومي</label>
                <input type="text" class="form-control" name="personalNumber" id="inputEmail4" placeholder="الرقم القومي">
            </div>
            <div class="form-group col-md-6">
                <label for="inputState">الحاله</label>
                <select id="inputState" class="form-control" name="status">
                    <option selected>اختر الحاله</option>
                    <option value="1">استعلام</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>

@endsection
