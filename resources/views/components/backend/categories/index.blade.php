@extends('components.layout.app')
@section('content')
 <!-- --------------------- start Contact ---------------- -->
 <div class="card card-body">
              <div class="row">
                <div class="col-md-4 col-xl-3">
                  <form class="position-relative">
                    <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Search Contacts..." />
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                  </form>
                </div>
                <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                  <div class="action-btn show-btn" style="display: none">
                    <a href="javascript:void(0)" class="delete-multiple btn-light-danger btn me-2 text-danger d-flex align-items-center font-medium">
                      <i class="ti ti-trash text-danger me-1 fs-5"></i> Delete All Row 
                    </a>
                  </div>
                  <a href="javascript:void(0)" id="btn-add-contact" class="btn btn-info d-flex align-items-center">
                    <i class="ti ti-users text-white me-1 fs-5"></i> Add Contact 
                  </a>
                </div>
              </div>
            </div>
            <!-- ---------------------
                            end Contact
                        ---------------- -->

                        <div class="card card-body">
              <div class="table-responsive">
                <table class="table search-table align-middle text-nowrap">
                  <thead class="header-item">
                    <th>
                      <div class="n-chk align-self-center text-center">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input primary" id="contact-check-all" />
                          <label class="form-check-label" for="contact-check-all"></label>
                          <span class="new-control-indicator"></span>
                        </div>
                      </div>
                    </th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Location</th>
                    <th>Phone</th>
                    <th>Action</th>
                  </thead>
                  <tbody>
                    <!-- start row -->
                    <tr class="search-items">
                      <td>
                        <div class="n-chk align-self-center text-center">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox1" />
                            <label class="form-check-label" for="checkbox1"></label>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../../dist/images/profile/user-1.jpg" alt="avatar" class="rounded-circle" width="35" />
                          <div class="ms-3">
                            <div class="user-meta-info">
                              <h6 class="user-name mb-0" data-name="Emma Adams">Emma Adams</h6>
                              <span class="user-work fs-3" data-occupation="Web Developer">Web Developer</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="usr-email-addr" data-email="adams@mail.com">adams@mail.com</span>
                      </td>
                      <td>
                        <span class="usr-location" data-location="Boston, USA">Boston, USA</span>
                      </td>
                      <td>
                        <span class="usr-ph-no" data-phone="+1 (070) 123-4567">+91 (070) 123-4567</span>
                      </td>
                      <td>
                        <div class="action-btn">
                          <a href="javascript:void(0)" class="text-info edit">
                            <i class="ti ti-eye fs-5"></i>
                          </a>
                          <a href="javascript:void(0)" class="text-dark delete ms-2">
                            <i class="ti ti-trash fs-5"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <!-- end row -->
                    <!-- start row -->
                    <tr class="search-items">
                      <td>
                        <div class="n-chk align-self-center text-center">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox2" />
                            <label class="form-check-label" for="checkbox2"></label>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../../dist/images/profile/user-2.jpg" alt="avatar" class="rounded-circle" width="35" />
                          <div class="ms-3">
                            <div class="user-meta-info">
                              <h6 class="user-name mb-0" data-name="Olivia Allen">Olivia Allen</h6>
                              <span class="user-work fs-3" data-occupation="Web Designer">Web Designer</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="usr-email-addr" data-email="allen@mail.com">allen@mail.com</span>
                      </td>
                      <td>
                        <span class="usr-location" data-location="Sydney, Australia">Sydney, Australia</span>
                      </td>
                      <td>
                        <span class="usr-ph-no" data-phone="+91 (125) 450-1500">+91 (125) 450-1500</span>
                      </td>
                      <td>
                        <div class="action-btn">
                          <a href="javascript:void(0)" class="text-info edit">
                            <i class="ti ti-eye fs-5"></i>
                          </a>
                          <a href="javascript:void(0)" class="text-dark delete ms-2">
                            <i class="ti ti-trash fs-5"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <!-- end row -->
                    <!-- start row -->
                    <tr class="search-items">
                      <td>
                        <div class="n-chk align-self-center text-center">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox3" />
                            <label class="form-check-label" for="checkbox3"></label>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../../dist/images/profile/user-3.jpg" alt="avatar" class="rounded-circle" width="35" />
                          <div class="ms-3">
                            <div class="user-meta-info">
                              <h6 class="user-name mb-0" data-name="Isabella Anderson"> Isabella Anderson </h6>
                              <span class="user-work fs-3" data-occupation="UX/UI Designer">UX/UI Designer</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="usr-email-addr" data-email="anderson@mail.com">anderson@mail.com</span>
                      </td>
                      <td>
                        <span class="usr-location" data-location="Miami, USA">Miami, USA</span>
                      </td>
                      <td>
                        <span class="usr-ph-no" data-phone="+91 (100) 154-1254">+91 (100) 154-1254</span>
                      </td>
                      <td>
                        <div class="action-btn">
                          <a href="javascript:void(0)" class="text-info edit">
                            <i class="ti ti-eye fs-5"></i>
                          </a>
                          <a href="javascript:void(0)" class="text-dark delete ms-2">
                            <i class="ti ti-trash fs-5"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <!-- end row -->
                    <!-- start row -->
                    <tr class="search-items">
                      <td>
                        <div class="n-chk align-self-center text-center">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox4" />
                            <label class="form-check-label" for="checkbox4"></label>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../../dist/images/profile/user-4.jpg" alt="avatar" class="rounded-circle" width="35" />
                          <div class="ms-3">
                            <div class="user-meta-info">
                              <h6 class="user-name mb-0" data-name="Amelia Armstrong"> Amelia Armstrong </h6>
                              <span class="user-work fs-3" data-occupation="Ethical Hacker">Ethical Hacker</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="usr-email-addr" data-email="armstrong@mail.com">armstrong@mail.com</span>
                      </td>
                      <td>
                        <span class="usr-location" data-location="Tokyo, Japan">Tokyo, Japan</span>
                      </td>
                      <td>
                        <span class="usr-ph-no" data-phone="+91 (154) 199- 1540">+91 (154) 199- 1540</span>
                      </td>
                      <td>
                        <div class="action-btn">
                          <a href="javascript:void(0)" class="text-info edit">
                            <i class="ti ti-eye fs-5"></i>
                          </a>
                          <a href="javascript:void(0)" class="text-dark delete ms-2">
                            <i class="ti ti-trash fs-5"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <!-- end row -->
                    <!-- start row -->
                    <tr class="search-items">
                      <td>
                        <div class="n-chk align-self-center text-center">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox5" />
                            <label class="form-check-label" for="checkbox5"></label>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../../dist/images/profile/user-5.jpg" alt="avatar" class="rounded-circle" width="35" />
                          <div class="ms-3">
                            <div class="user-meta-info">
                              <h6 class="user-name mb-0" data-name="Emily Atkinson"> Emily Atkinson </h6>
                              <span class="user-work fs-3" data-occupation="Web developer">Web developer</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="usr-email-addr" data-email="atkinson@mail.com">atkinson@mail.com</span>
                      </td>
                      <td>
                        <span class="usr-location" data-location="Edinburgh, UK">Edinburgh, UK</span>
                      </td>
                      <td>
                        <span class="usr-ph-no" data-phone="+91 (900) 150- 1500">+91 (900) 150- 1500</span>
                      </td>
                      <td>
                        <div class="action-btn">
                          <a href="javascript:void(0)" class="text-info edit">
                            <i class="ti ti-eye fs-5"></i>
                          </a>
                          <a href="javascript:void(0)" class="text-dark delete ms-2">
                            <i class="ti ti-trash fs-5"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <!-- end row -->
                    <!-- start row -->
                    <tr class="search-items">
                      <td>
                        <div class="n-chk align-self-center text-center">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox6" />
                            <label class="form-check-label" for="checkbox6"></label>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../../dist/images/profile/user-1.jpg" alt="avatar" class="rounded-circle" width="35" />
                          <div class="ms-3">
                            <div class="user-meta-info">
                              <h6 class="user-name mb-0" data-name="Sofia Bailey">Sofia Bailey</h6>
                              <span class="user-work fs-3" data-occupation="UX/UI Designer">UX/UI Designer</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="usr-email-addr" data-email="bailey@mail.com">bailey@mail.com</span>
                      </td>
                      <td>
                        <span class="usr-location" data-location="New York, USA">New York, USA</span>
                      </td>
                      <td>
                        <span class="usr-ph-no" data-phone="+91 (001) 160- 1845">+91 (001) 160- 1845</span>
                      </td>
                      <td>
                        <div class="action-btn">
                          <a href="javascript:void(0)" class="text-info edit">
                            <i class="ti ti-eye fs-5"></i>
                          </a>
                          <a href="javascript:void(0)" class="text-dark delete ms-2">
                            <i class="ti ti-trash fs-5"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="search-items">
                      <td>
                        <div class="n-chk align-self-center text-center">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox7" />
                            <label class="form-check-label" for="checkbox7"></label>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../../dist/images/profile/user-2.jpg" alt="avatar" class="rounded-circle" width="35" />
                          <div class="ms-3">
                            <div class="user-meta-info">
                              <h6 class="user-name mb-0" data-name="Victoria Sharma"> Victoria Sharma </h6>
                              <span class="user-work fs-3" data-occupation="Project Manager">Project Manager</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="usr-email-addr" data-email="sharma@mail.com">sharma@mail.com</span>
                      </td>
                      <td>
                        <span class="usr-location" data-location="Miami, USA">Miami, USA</span>
                      </td>
                      <td>
                        <span class="usr-ph-no" data-phone="+91 (110) 180- 1600">+91 (110) 180- 1600</span>
                      </td>
                      <td>
                        <div class="action-btn">
                          <a href="javascript:void(0)" class="text-info edit">
                            <i class="ti ti-eye fs-5"></i>
                          </a>
                          <a href="javascript:void(0)" class="text-dark delete ms-2">
                            <i class="ti ti-trash fs-5"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <tr class="search-items">
                      <td>
                        <div class="n-chk align-self-center text-center">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox8" />
                            <label class="form-check-label" for="checkbox8"></label>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../../dist/images/profile/user-3.jpg" alt="avatar" class="rounded-circle" width="35" />
                          <div class="ms-3">
                            <div class="user-meta-info">
                              <h6 class="user-name mb-0" data-name="Penelope Baker"> Penelope Baker </h6>
                              <span class="user-work fs-3" data-occupation="Web Developer">Web Developer</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="usr-email-addr" data-email="baker@mail.com">baker@mail.com</span>
                      </td>
                      <td>
                        <span class="usr-location" data-location="Edinburgh, UK">Edinburgh, UK</span>
                      </td>
                      <td>
                        <span class="usr-ph-no" data-phone="+91 (405) 483- 4512">+91 (405) 483- 4512</span>
                      </td>
                      <td>
                        <div class="action-btn">
                          <a href="javascript:void(0)" class="text-info edit">
                            <i class="ti ti-eye fs-5"></i>
                          </a>
                          <a href="javascript:void(0)" class="text-dark delete ms-2">
                            <i class="ti ti-trash fs-5"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
@endsection