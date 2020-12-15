@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.photo.actions.edit', ['name' => $photo->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <photo-form
                :action="'{{ $photo->resource_url }}'"
                :data="{{ $photo->toJson() }}"
                v-cloak
                inline-template>

                <form enctype="multipart/form-data" class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.photo.actions.edit', ['name' => $photo->name]) }}
                    </div>

                    <div class="card-body">
                                           @include('photo.components.form-elements')

                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>

                </form>

        </photo-form>

        </div>

</div>

@endsection
