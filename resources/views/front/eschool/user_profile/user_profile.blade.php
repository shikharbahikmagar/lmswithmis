@extends('front.layouts.eschool_layouts.layout')
@section('content')


<div class="text-center" style="margin-top: 50px;">
  <h1>My Details</h1>
</div>
<div class="container bootstrap snippets bootdey" style="margin-top: 60px;">
<div class="row ng-scope">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-body text-center">
                <div class="pv-lg"><img class="center-block img-responsive img-circle img-thumbnail thumb96" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Contact"></div>
                <h3 class="m0 text-bold">Audrey Hunt</h3>
                <div class="mv-lg">
                    <p>Hello, I'm a just a dummy contact in your contact list and this is my presentation text. Have fun!</p>
                </div>
                <div class="text-center"><a class="btn btn-primary" href="">Send message</a></div>
            </div>
        </div>
        <div class="panel panel-default hidden-xs hidden-sm">
            <div class="panel-heading">
                <div class="panel-title text-center">Recent contacts</div>
            </div>
            <div class="panel-body">
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#"><img class="media-object img-circle img-thumbnail thumb48" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="Contact"></a>
                    </div>
                    <div class="media-body pt-sm">
                        <div class="text-bold">Floyd Ortiz
                            <div class="text-sm text-muted">12m ago</div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#"><img class="media-object img-circle img-thumbnail thumb48" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Contact"></a>
                    </div>
                    <div class="media-body pt-sm">
                        <div class="text-bold">Luis Vasquez
                            <div class="text-sm text-muted">2h ago</div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#"><img class="media-object img-circle img-thumbnail thumb48" src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="Contact"></a>
                    </div>
                    <div class="media-body pt-sm">
                        <div class="text-bold">Duane Mckinney
                            <div class="text-sm text-muted">yesterday</div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#"><img class="media-object img-circle img-thumbnail thumb48" src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="Contact"></a>
                    </div>
                    <div class="media-body pt-sm">
                        <div class="text-bold">Connie Lambert
                            <div class="text-sm text-muted">2 weeks ago</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="pull-right">
                    <div class="btn-group dropdown" uib-dropdown="dropdown">
                        <button class="btn btn-link dropdown-toggle" uib-dropdown-toggle="" aria-haspopup="true" aria-expanded="false"><em class="fa fa-ellipsis-v fa-lg text-muted"></em></button>
                        <ul class="dropdown-menu dropdown-menu-right animated fadeInLeft" role="menu">
                            <li><a href=""><span>Send by message</span></a></li>
                            <li><a href=""><span>Share contact</span></a></li>
                            <li><a href=""><span>Block contact</span></a></li>
                            <li><a href=""><span class="text-warning">Delete contact</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="h4 text-center">My Information</div>
                <div class="row pv-lg">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <form class="form-horizontal ng-pristine ng-valid">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact1">Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="inputContact1" type="text" placeholder="" value="Audrey Hunt">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact2">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="inputContact2" type="email" value="mail@example.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact3">Phone</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="inputContact3" type="text" value="(123) 465 789">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact4">Mobile</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="inputContact4" type="text" value="(12) 123 987 465">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact5">Website</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="inputContact5" type="text" value="http://some.wesbite.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact6">Address</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="inputContact6" row="4">Some nice Street, 1234</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact7">Social</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="inputContact7" type="text" value="@Social">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact8">Company</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="inputContact8" type="text" placeholder="No Company">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Favorite contact?</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button class="btn btn-info" type="submit">Update</button>
                                </div>
                            </div>
                        </form>
                        <div class="text-right"><a class="text-muted" href="#">Delete this contact?</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection