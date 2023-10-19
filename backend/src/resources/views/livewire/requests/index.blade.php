<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Requests List</h3>
                <p class="text-subtitle text-muted">
                    see your request tracking list and manage those
                </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first d-flex justify-content-end">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        new request
                    </button>
                </p>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="collapse" id="collapseExample" wire:ignore.self>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">list of requests that you registered</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" wire:submit.prevent>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="address-input">address</label>
                                            </div>
                                            <div class="col-md-8 form-group  @error('url') is-invalid @enderror">
                                                <input type="text" id="address-input" class="form-control"
                                                    placeholder=" url (page address)" wire:model.lazy='url'>
                                                @error('url')
                                                    <span>{{ $message }}</span>
                                                @else
                                                    <span style="visibility: hidden">.</span>
                                                @enderror

                                            </div>
                                            <div class="col-md-4">
                                                <label for="address-input">price</label>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <div class="input-group">
                                                    <span class="input-group-text">$</span>
                                                    <input type="text"
                                                        class="form-control @error('min') is-invalid @enderror"
                                                        placeholder="minimume price" wire:model.lazy='min'>
                                                    <span class="input-group-text">min</span>
                                                </div>
                                                @error('min')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @else
                                                    <span style="visibility: hidden">.</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <div class="input-group">
                                                    <span class="input-group-text">$</span>
                                                    <input type="text"
                                                        class="form-control @error('max') is-invalid @enderror"
                                                        placeholder="maximume price" wire:model.lazy='max'>
                                                    <span class="input-group-text">max</span>
                                                </div>
                                                @error('max')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @else
                                                    <span style="visibility: hidden">.</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <button type="button" class="btn btn-primary me-1 mb-1"
                                                    wire:click='createRequest' wire:loading.class='disabled'
                                                    wire:loading.target='createRequest'>
                                                    create new
                                                    <div wire:loading wire:loading.target='createRequest'>
                                                        <div class="spinner-border text-light spinner-border-sm"
                                                            role="status"></div>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">list of requests that you registered</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-lg">
                                    <thead>
                                        <tr>
                                            <th>#uid</th>
                                            <th>status</th>
                                            <th>price</th>
                                            <th>time spent</th>
                                            <th>finished time</th>
                                            <th>actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-bold-500">12542</td>
                                            <td>done</td>
                                            <td class="text-bold-500"> 10.25$ ~ 100$</td>
                                            <td class="text-bold-500">{{ now() }}</td>
                                            <td class="text-bold-500">{{ now() }}</td>
                                            <td class="text-bold-500">
                                                <a href="{{ route('request.show', 1) }}" type="button"
                                                    class="btn btn-primary">
                                                    show
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
