<div class="row justify-content-around">
    <div class="col-md-3">
        <div class="card bg-transparent border-primary mb-3">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body text-white">
                        <h5 class="card-title mt-2">Ganancias</b></h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body text-white">
                        <p class="card-text text-white mt-2">{{ $sum_registro }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-transparent border-danger mb-3">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body text-white">
                        <h5 class="card-title mt-2">Perdidas</b></h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body text-white">
                        <p class="card-text text-white mt-2">{{ $res_registro }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-transparent border-success mb-3">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body text-white">
                        <h5 class="card-title mt-2">Total</b></h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body text-white">
                        <p class="card-text text-white mt-2">{{ $sum_registro - $res_registro }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>