@extends('masterAdmin')
@section('content')
<div class="content-detached content-right">
  <div class="content-body">
    <section class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-head">
            <div class="card-header">
              <h4 class="card-title">All image
              </h4>
              <a class="heading-elements-toggle">
                <i class="la la-ellipsis-h font-medium-3">
                </i>
              </a>
              <div class="heading-elements">
                <a href="addImageProduct">
                  <button class="btn btn-primary btn-sm">
                    <i class="ft-plus white">Add new
                    </i> 
                  </button>
                </a>
              </div>
            </div>
            <div class="card-header">
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ft-search"></i></span>
                        </div>
                        <input type="text" class="form-control ac-default" />
                      </div>
            </div>
          </div>
          <div class="card-content">
            <div class="card-body">
              <!-- Task List table -->
              <div class="table-responsive">
                <table id="users-contacts" class="table table-striped table-bordered row-grouping display no-wrap icheck table-middle">
                  <thead>
                    <tr>
                      <th>
                      </th>
                      <th>ID
                      </th>
                      <th>Image
                      </th>
                      <th>ID product
                      </th>
                      <th>Actions
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <input type="checkbox" class="input-chk">
                      </td>
                      <td>
                        <div class="media">
                          <div class="media-left pr-1">
                            <span class="avatar avatar-sm avatar-online rounded-circle">
                              <img src="source/Admin/app-assets/images/portrait/small/avatar-s-2.png" alt="avatar">
                              <i>
                              </i>
                            </span>
                          </div>
                          <div class="media-body media-middle">
                            <a href="#" class="media-heading">Alice Collins
                            </a>
                          </div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a href="mailto:email@example.com">alice@example.com
                        </a>
                      </td>
                      <td>+658-254-256
                      </td>
                      <td>
                        <span class="dropdown">
                          <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right">
                            <i class="ft-settings">
                            </i>
                          </button>
                          <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                            <a href="editCategory" class="dropdown-item">
                              <i class="ft-edit-2">
                              </i> Edit
                            </a>
                            <a href="#" class="dropdown-item">
                              <i class="ft-trash-2">
                              </i> Delete
                            </a>
                          </span>
                        </span>
                      </td>
                   </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection
