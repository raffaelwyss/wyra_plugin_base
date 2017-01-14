<!-- {$smarty.template} START -->

<div class="row">

    <br>

    {formdata type="group"}

    <form wyra-form
          name="form"
          action="{_ U='action'}"
          method="POST"
          class="form-horizontal"
          novalidate>

        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">{_ I='2x_download'} {_ L='INSTALLATION'}</div>
                </div>
            </div>
        </div>


        <div class="col-md-12" ng-cloak>

            <div class="col-md-6">
                <div class="card">
                    <div class="header">{_ I='database'} {_ L='DATENBANK'}</div>
                    <div class="content">

                        {formelements group="datenbank"}

                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="card">
                    <div class="header">{_ I='gear'}  {_ L='EINSTELLUNGEN'}</div>
                    <div class="content">

                        {formelements group="einstellung"}

                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="content text-center">
                        <button ng-disabled="form.busy || !form.$valid" type="submit" class="btn btn-primary btn-fill btn-lg">{_ L='INSTALLIEREN'}</button>
                    </div>
                </div>
            </div>

        </div>

    </form>

</div>

<!-- {$smarty.template} END -->
