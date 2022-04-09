<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div>
    
    <div class="form-group row">
        <label for="state" class="col-md-4 col-form-label text-md-right">Brand</label>
        <div class="col-md-6">
            <select wire:model="Selectedbrands" class="form-control">
                <option value="" selected>Choose brand</option>
                @foreach($brand as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                @endforeach
            </select>
        </div>
    </div>
  
    @if (!is_null($Selectedbrands))
        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-right">Model</label>
  
            <div class="col-md-6">
                <select class="form-control" name="city_id">
                    <option value="" selected>Choose model</option>
                    @foreach($brandmodel as $brandmodels)
                        <option value="{{ $brandmodels->id }}">{{ $brandmodels->model_name }}</option>
                    @endforeach
                </select>
            </div>

            

        </div>
    @endif
</div>
</div>
<div class="col g-4">Varient</div>
    <div class="col g-4">
    <select class="form-select" name='variant' aria-label="Default select example">
    <option selected>select varient</option>
    <option value="4gb">4gb</option> 
    <option value="6gb">6gb</option> 
    </select></div>
	</div>