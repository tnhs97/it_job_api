@extends('masterAdmin')
@section('content')      
<div class="content-detached content-right">
  <div class="content-body">
    <!-- Basic form layout section start -->
    <section id="horizontal-form-layouts">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-content collpase show">
              <div class="card-body">
                <form class="form form-horizontal">
                  <div class="form-body">
                    <h4 class="form-section">
                      <i class="ft-clipboard">
                      </i> Edit now
                    </h4>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="projectinput6">Categories name
                      </label>
                      <div class="col-md-9">
                        <select id="projectinput6" name="interested" class="form-control">
                          <option value="none" selected="" disabled="">Categories name
                          </option>
                          <option value="design">design
                          </option>
                          <option value="development">development
                          </option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="projectinput5">Product name
                      </label>
                      <div class="col-md-9">
                        <input type="text" id="projectinput5" class="form-control" placeholder="Product name"
                               name="company">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="projectinput9">Description
                      </label>
                      <div class="col-md-9">
                        <textarea id="projectinput9" rows="5" class="form-control" name="comment" placeholder="Description">
                        </textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="projectinput5">Sattus</label>
                      <div class="col-md-9">
                        <input type="text" id="projectinput5" class="form-control" placeholder="Sattus"
                               name="company">
                      </div>
                    </div>
                  </div>
                  <div class="form-actions">
                    <a href="products">
                      <button type="button" class="btn btn-warning mr-1">
                        <i class="ft-x">
                        </i> Cancel
                      </button>
                    </a>
                    <button type="submit" class="btn btn-primary">
                      <i class="la la-check-square-o">
                      </i> Save
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- // Basic form layout section end -->
  </div>
</div>
@endsection
