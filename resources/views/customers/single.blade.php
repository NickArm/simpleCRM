<!DOCTYPE html>
<html lang="en">

<head>

    @extends('layouts.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <x-sidebar></x-sidebar>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <x-topbar></x-topbar>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                    <div class="container-xl px-4">
                        <div class="page-header-content">
                            <div class="row align-items-center justify-content-between pt-3">
                                <div class="col-auto mb-3">
                                    <h1 class="page-header-title">
                                        <div class="page-header-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg></div>
                                        Account Settings - Profile
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Main page content-->
                <div class="container-xl px-4 mt-4">
                    <!-- Account page navigation-->
                    <nav class="nav nav-borders">
                        <a class="nav-link active ms-0" href="account-profile.html">Profile</a>
                        <a class="nav-link" href="account-billing.html">Billing</a>
                        <a class="nav-link" href="account-security.html">Security</a>
                        <a class="nav-link" href="account-notifications.html">Notifications</a>
                    </nav>
                    <hr class="mt-0 mb-4">
                    <div class="row">

                        <div class="col-xl-4">
                            <!-- Account details card-->
                            <div class="card mb-4">
                                <div class="card-header">Account Details</div>
                                <div class="card-body">
                                    <form>
                                        {{ csrf_field() }}
                                        <!-- Form Row-->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (first name)-->
                                            <div class="col-md-12">
                                                <label class="small mb-1" for="inputFirstName">First
                                                    name</label>
                                                <input class="form-control" id="inputFirstName" type="text"
                                                    placeholder="Enter your first name" value="{{ $cus->fname }}">
                                            </div>
                                            <!-- Form Group (last name)-->
                                            <div class="col-md-12">
                                                <label class="small mb-1" for="inputLastName">Last name</label>
                                                <input class="form-control" id="inputLastName" type="text"
                                                    placeholder="Enter your last name" value="{{ $cus->lname }}">
                                            </div>
                                        </div>
                                        <!-- Form Row        -->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (organization name)-->
                                            <div class="col-md-12">
                                                <label class="small mb-1" for="inputOrgName">Company
                                                    name</label>
                                                <input class="form-control" id="inputOrgName" type="text"
                                                    placeholder="Enter your organization name"
                                                    value="{{ $cus->company }}">
                                            </div>
                                            <!-- Form Group (location)-->
                                            <div class="col-md-12">
                                                <label class="small mb-1" for="inputLocation">Address</label>
                                                <input class="form-control" id="inputLocation" type="text"
                                                    placeholder="Enter your location" value="{{ $cus->address }}">
                                            </div>
                                        </div>

                                        <!-- Form Row-->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (phone number)-->
                                            <div class="col-md-12">
                                                <label class="small mb-1" for="inputPhone">Phone
                                                    number</label>
                                                <input class="form-control" id="inputPhone" type="tel"
                                                    placeholder="Enter your phone number" value="{{ $cus->phone }}">
                                            </div>
                                            <!-- Form Group (email)-->
                                            <div class="col-md-12">
                                                <label class="small mb-1" for="inputEmailAddress">Email
                                                    address</label>
                                                <input class="form-control" id="inputEmailAddress" type="email"
                                                    placeholder="Enter your email address" value="{{ $cus->email }}">
                                            </div>
                                        </div>
                                        <!-- Save changes button-->
                                        <button class="btn btn-primary" type="button">Save changes</button>
                                        <!-- Add Service button-->
                                        <button class="btn btn-primary" type="button">Add Service</button>
                                        <!-- Send Message button-->
                                        <button class="btn btn-primary" type="button" data-toggle="modal"
                                            data-target="#messageModal">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <!-- Profile picture card-->
                            <div class="card mb-4 mb-xl-0">
                                <div class="card-header">Services</div>
                                <div class="card-body text-center">
                                    <table class="table table-bordered" id="dataTable" width="100%"
                                        cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Service</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Εxpiration</th>
                                                <th>Reminder</th>
                                                <th>Paid</th>
                                            </tr>
                                        </thead>
                                        @foreach ($services as $b)
                                            <tr class="odd gradeX">

                                                <td>
                                                    {{ $b->service_name }}
                                                </td>
                                                <td>
                                                    {{ $b->notes }}
                                                </td>

                                                <td>
                                                    {{ $b->price }}
                                                </td>
                                                <td>
                                                    {{ $b->expiration }}
                                                </td>
                                                <td>
                                                    {{ $b->reminder }}
                                                </td>
                                                <td>
                                                    <a href="#" style="font-size: 0.5rem;"
                                                        class="btn btn-success btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-check"></i>
                                                        </span>
                                                        <span class="text">Paid</span>
                                                    </a>


                                                </td>

                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <x-footer></x-footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <x-main_scripts></x-main_scripts>

    <!-- Message Modal -->
    <div class="modal" id="messageModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title">Send Message to {{ $cus->fname }} {{ $cus->lname }}</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="POST" action="/sendmessage">
                    @csrf
                    <div class="modal-body">

                        <input name="email" type="email" class="form-control" id="email"
                            value="{{ $cus->email }}">

                        <div class="form-group">
                            <label for="message">Write your message</label>
                            <textarea class="form-control" name="your_message" id="message" rows="3"></textarea>
                        </div>

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Send</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

</html>