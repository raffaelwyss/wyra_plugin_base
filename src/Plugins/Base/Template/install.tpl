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
            <div class="card">
                <div class="card-header">
                    {_ I='3x_download'} <span class="text-3x">{_ L='Base.INSTALLATION'}</span>
                </div>
                <div class="card-block">
                    <p class="card-text">

                        <div class="col-md-6">

                            <div class="card">
                                <div class="card-header">
                                    {_ I='database'} <span class="">{_ L='Base.DATENBANK'}</span>
                                </div>
                                <div class="card-block">
                                    <p class="card-text">

                                        {formelements group="datenbank"}

                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="card">
                                <div class="card-header">{_ I='gear'}  {_ L='Base.EINSTELLUNGEN'}</div>
                                <div class="card-block">
                                    <p class="card-text">

                                        {formelements group="einstellung"}

                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="text-center">
                                <button ng-disabled="form.busy" type="submit" class="btn btn-primary btn-fill btn-lg">{_ L='Base.INSTALLIEREN'}</button>
                            </div>
                        </div>


                    </p>
                </div>
            </div>
        </div>


    </form>

</div>

<!-- {$smarty.template} END -->
