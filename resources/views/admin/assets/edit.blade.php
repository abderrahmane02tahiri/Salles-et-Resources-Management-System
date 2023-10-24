@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.asset.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.assets.update", [$asset->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="category_id">{{ trans('cruds.asset.fields.category') }}</label>
                <select class="form-control select2 {{ $errors->has('category') ? 'is-invalid' : '' }}" name="category_id" id="category_id" required>
                    @foreach($categories as $id => $entry)
                        <option value="{{ $id }}" {{ (old('category_id') ? old('category_id') : $asset->category->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.asset.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="serial_number">{{ trans('cruds.asset.fields.serial_number') }}</label>
                <input class="form-control {{ $errors->has('serial_number') ? 'is-invalid' : '' }}" type="text" name="serial_number" id="serial_number" value="{{ old('serial_number', $asset->serial_number) }}">
                @if($errors->has('serial_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('serial_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.asset.fields.serial_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.asset.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $asset->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.asset.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="status_id">{{ trans('cruds.asset.fields.status') }}</label>
                <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status_id" id="status_id" required>
                    @foreach($statuses as $id => $entry)
                        <option value="{{ $id }}" {{ (old('status_id') ? old('status_id') : $asset->status->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.asset.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="location_id">{{ trans('cruds.asset.fields.location') }}</label>
                <select class="form-control select2 {{ $errors->has('location') ? 'is-invalid' : '' }}" name="location_id" id="location_id" required>
                    @foreach($locations as $id => $entry)
                        <option value="{{ $id }}" {{ (old('location_id') ? old('location_id') : $asset->location->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('location'))
                    <div class="invalid-feedback">
                        {{ $errors->first('location') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.asset.fields.location_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="notes">{{ trans('cruds.asset.fields.notes') }}</label>
                <textarea class="form-control {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" id="notes">{{ old('notes', $asset->notes) }}</textarea>
                @if($errors->has('notes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('notes') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.asset.fields.notes_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="assigned_to_id">{{ trans('cruds.asset.fields.assigned_to') }}</label>
                <select class="form-control select2 {{ $errors->has('assigned_to') ? 'is-invalid' : '' }}" name="assigned_to_id" id="assigned_to_id">
                    @foreach($assigned_tos as $id => $entry)
                        <option value="{{ $id }}" {{ (old('assigned_to_id') ? old('assigned_to_id') : $asset->assigned_to->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('assigned_to'))
                    <div class="invalid-feedback">
                        {{ $errors->first('assigned_to') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.asset.fields.assigned_to_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection