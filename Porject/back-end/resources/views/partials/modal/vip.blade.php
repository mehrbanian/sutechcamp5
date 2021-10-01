<div class="modal fade upgrade-modal" id="upgrade_account" tabindex="-1" aria-labelledby="upgrade_account_label"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="upgrade_account_label">ارتقا حساب کاربری</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('subs.new')}}" class="upgrade-acc" method="POST">
                    @csrf
                    <div class="plan">
                        <input type="radio" name="vip_plan" id="vip1" checked="checked" value="1">
                        <label for="vip1" class="plan-content">
                            <div class="icon">
                                <i class="fas fa-crown"></i>
                            </div>
                            <div class="text">
                                <h4 class="plan-name">اشتراک ویژه طرح عادی</h4>
                                <p class="plan-desc">1 ماه دسترسی نامحدود</p>
                            </div>
                            <div class="price">
                                15,000 تومان
                            </div>
                        </label>
                    </div>
                    <div class="plan">
                        <input type="radio" name="vip_plan" id="vip2" value="2">
                        <label for="vip2" class="plan-content">
                            <div class="icon">
                                <i class="fas fa-crown"></i>
                            </div>
                            <div class="text">
                                <h4 class="plan-name">اشتراک ویژه طرح طلایی</h4>
                                <p class="plan-desc">3 ماه دسترسی نامحدود</p>
                            </div>
                            <div class="price">
                                40,000 تومان
                            </div>
                        </label>
                    </div>
                    <div class="plan">
                        <input type="radio" name="vip_plan" id="vip3" value="3">
                        <label for="vip3" class="plan-content">
                            <div class="icon">
                                <i class="fas fa-crown"></i>
                            </div>
                            <div class="text">
                                <h4 class="plan-name">اشتراک ویژه طرح لاکچری</h4>
                                <p class="plan-desc">6 ماه دسترسی نامحدود</p>
                            </div>
                            <div class="price">
                                75,000 تومان
                            </div>
                        </label>
                    </div>

                    <div class="payment-info">
                        <div class="info">
                            <h6>
                                موجود کیف پول شما:
                                <span>{{number_format(auth()->user()->wallet)}}</span> تومان
                            </h6>
                            <a href="#">شارژ حساب</a>
                        </div>

                        <button type="submit">
                            <i class="fas fa-rocket"></i>
                            ارتقا بده!
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
