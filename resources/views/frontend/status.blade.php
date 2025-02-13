@extends('frontend.layouts.app')


@section('content')
    <div class="container">
        <br />
        <br />
        <br />
        <div class="">

            <div>
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Check status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form id="clientStatusCheck" action="{{ route('clientStatusCheck') }}" method="Post">
                                <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">Client ID</label> -->
                                    <input type="text" class="form-control" name="cid" placeholder="Client ID" required>

                                    <!-- <label for="exampleInputPassword1">Passport No</label> -->
                                    <input type="text" class="form-control my-2" name="psn" placeholder="Passport" required>
                                    <p class="text-info">{{ session('message') }}</p>
                                </div>
                                <div id="statusMessageWrapper" class="text-info mb-4"> </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary text-right">Check</button>

                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>



@endsection


@push('style')
    <style>


    </style>
@endpush
