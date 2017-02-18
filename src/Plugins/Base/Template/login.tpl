<!-- {$smarty.template} START -->

<div class="row">

    <br>

    <div class="col-md12">

        <div class="col-md-4"></div>

        <div class="col-md-4">

            <div class="card">

                <div class="card-header">
                    <span class="text-middle text-2x">{_ I='user-circle-o'}</span>
                    <span class="text-middle text-2x">{_ L='Base.LOGIN'}</span>
                </div>
                <div class="card-block">

                    {formdata}

                    <form wyra-form
                          name="form"
                          action="{_ U='action'}"
                          method="POST"
                          class="form-horizontal"
                          novalidate>

                        {formelements}

                        <div class="form-group">

                            <label class="col-sm-4"></label>
                            <div class="col-sm-8">
                                <button id="loginbutton" ng-disabled="form.busy || !form.$valid" type="submit" class="btn btn-primary btn-fill btn-lg">{_ L='Base.LOGIN'}</button>
                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>

        <div class="col-md-4"></div>


    </div>


</div>

<!-- {$smarty.template} END -->
