           <form wire:submit.prevent="store">
      

<div class="form-group align-items-center">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" class="form-control"wire:model="title"  id="title" name="title">
        </div>
</div>

<div class="form-group align-items-center">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
                             <input type="file" wire:model="photo" >

        </div>
</div>

<div class="form-group align-items-center" >
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" class="form-control" wire:model="slug" >
        </div>
</div>

<div class="form-group row align-items-center" >
    <label for="body" class="col-form-label text-md-right"></label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea wire:model="body"></textarea>
        </div>
    </div>
</div>

<div class="form-check row" >
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label">
                <input type="checkbox" wire:model="is_published"  class="form-check-input">
                <i class="input-frame"></i>
            </label>
        </div>
    </div>
</div>

<div class="form-group align-items-center" :class="{'has-danger': errors.has('seo_description'), 'has-success': fields.seo_description && fields.seo_description.valid }">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" class="form-control" wire:model="seo_description">
        </div>
</div>

<div class="form-group align-items-center">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" class="form-control" wire:model="seo_keywords">
        </div>
</div>

<div class="form-group align-items-center">
        <div class="input-group">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="icon-user"></i></span>
            </span>
            <input type="text" class="form-control" wire:model="seo_title">
        </div>
</div>
          <div class="card-footer">
                    <button type="submit" class="btn btn-primary" :disabled="submiting">
                        <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                        {{ trans('brackets/admin-ui::admin.btn.save') }}
                    </button>
                </div>
                
            </form>