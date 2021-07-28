@extends('layout/dashboard')
@section('title','Ini Title About')
@section('heading','Dashboard')

@section('container')    
<div class="tabs-animation">
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Announcement</h5>
                                <div class="alert alert-success fade show" role="alert"><h4 class="alert-heading">Hello World!</h4>
                                    <p>Welcome to sicyca (System Informasi Akademic Campus), Follow github.com/fzlanwr for more update</p>
                                    <hr>
                                    <p class="mb-0">Gunakan dengan sebaik-baiknya.</p></div>
                            </div>
                        </div>

                        <div class="row" >
                          



                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Total mahasiswa</div>
                                                <div class="widget-subheading">Last year expenses</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success">{{$totalmhs}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Total Dosen</div>
                                                <div class="widget-subheading">Best Lecturer</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-warning">{{$totaldosen}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Total User</div>
                                                <div class="widget-subheading">People Interested</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger">{{$totaluser}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        

</div>

<!-- ---------------------------------------------------------------------------------------------------------------- -->

 

<!-- ---------------------------------------------------------------------------------------------------------------- -->

            
@endsection