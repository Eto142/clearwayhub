@include('home.header')

    <!-- Main Content -->
    <div class="container my-4">
        <!-- Notifications Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="p-4 notification-section rounded">
                    <h2 class="h4 mb-3">Notifications</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-transparent">
                            <strong>License Closures</strong>: If your license is closed or canceled, you are still able to file missing returns or amend a return for any period prior to the closure/cancellation date.
                        </li>
                        <li class="list-group-item bg-transparent">
                            <strong>Browser Compatibility</strong>:LATaxes.gov only supports Internet Explorer 10 and 11, Google Chrome and Mozilla Firefox. Any other browsers used on this web application will have unexpected results.
                        </li>
                        <li class="list-group-item bg-transparent">
                            <strong>Troubleshooting</strong>: If you are having issues with the site, try another browser, clear your internet history / cache, or edit your bookmark to the updatedLATaxes.
                        </li>
                    </ul>
                </div>
            </div>
        </div>



        @php
$returnUrl = request()->query('return'); // gets ?return=... from Assurehold
@endphp




          <!-- Button to Tax Payment Form -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <a href="{{ route('tax.payment', ['return' => $returnUrl]) }}" class="btn btn-lg btn-arizona">
                    <i class="fas fa-file-invoice-dollar me-2"></i> Fill Tax Payment Form
                </a>
            </div>
        </div>

        <!-- Quick Payment Links -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="p-4 quick-links">
                    <h3 class="section-title">Quick Payment Links</h3>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card link-card h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-money-bill-wave text-success me-2"></i> Individual/Small Business</h5>
                                    <p class="card-text">Make an Individual/Small Business Income Payment</p>
                                    <a href="#" class="btn btn-sm btn-arizona">Make Payment</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card link-card h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-building text-primary me-2"></i> Corporations</h5>
                                    <p class="card-text">Make a Corporation/S-Corporation/Partnership Payment</p>
                                    <a href="#" class="btn btn-sm btn-arizona">Make Payment</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card link-card h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-receipt text-warning me-2"></i> Transaction Privilege Tax</h5>
                                    <p class="card-text">Make a Transaction Privilege/Use Tax Payment</p>
                                    <a href="#" class="btn btn-sm btn-arizona">Make Payment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Individuals Section -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="p-4 quick-links h-100">
                    <h3 class="section-title">Individuals</h3>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-search-dollar me-2"></i> Where's My Refund?
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-times-circle me-2"></i> Cancel a Payment
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-calendar-alt me-2"></i> Request a Payment Plan
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-file-alt me-2"></i> File Individual Income Tax
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-eye me-2"></i> View My 1099 Form
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Information/S-Corporation/Partnerships -->
            <div class="col-md-6">
                <div class="p-4 quick-links h-100">
                    <h3 class="section-title">Information/S-Corporation/Partnerships</h3>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-info-circle me-2"></i> Corporation Information
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-building me-2"></i> S-Corporation Resources
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-handshake me-2"></i> Partnership Guidelines
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-file-invoice me-2"></i> File Corporation Returns
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-question me-2"></i> FAQs for Businesses
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- <a href="#" id="returnBtn" class="btn btn-success">
  <i class="fas fa-credit-card me-2"></i> Proceed to Payment
</a>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const params = new URLSearchParams(window.location.search);
    const returnUrl = params.get("return");

    const btn = document.getElementById("returnBtn");
    if (returnUrl) {
        btn.href = returnUrl;
    } else {
        btn.href = "https://assurehold.com/"; // fallback
    }
});
</script> --}}

        <!-- OpenBooks Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="p-4 text-center quick-links">
                    <h3 class="text-primary"><i class="fas fa-book-open me-2"></i> OPENBOOKS OpenBooks.org</h3>
                    <p class="lead">Los Angeles Official Transparency Website</p>
                    <a href="#" class="btn btn-lg btn-arizona">Visit OpenBooks</a>
                </div>
            </div>
        </div>

        <!-- ALL Businesses Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="p-4 quick-links">
                    <h3 class="section-title">ALL Businesses</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i class="fas fa-user-plus me-2"></i> Enroll to File and Pay Online
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i class="fas fa-check-circle me-2"></i> Verify a Transaction Privilege License
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i class="fas fa-city me-2"></i> View City/Town Tax Rate Changes
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i class="fas fa-car me-2"></i> Application to Certify Your Individual-Owned Shared Vehicle for Peer-to-Peer Car Sharing
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i class="fas fa-download me-2"></i> Business Forms and Applications
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i class="fas fa-calendar me-2"></i> Tax Deadlines and Important Dates
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Resources Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="p-4 quick-links">
                    <h3 class="section-title">Resources</h3>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card link-card h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-file-alt me-2"></i> Completing the TPT-2 in AZTaxes</h5>
                                    <p class="card-text">Guidance for completing Transaction Privilege Tax returns</p>
                                    <a href="#" class="btn btn-sm btn-outline-primary">View Guide</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card link-card h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-book me-2"></i> Publications</h5>
                                    <p class="card-text">Official tax publications and documentation</p>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Browse Publications</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card link-card h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-id-card me-2"></i> Los Angeles Licensing Guide</h5>
                                    <p class="card-text">Complete guide to Los Angeles business licensing</p>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Read Guide</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card link-card h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-info-circle me-2"></i> Business Tax Descriptions</h5>
                                    <p class="card-text">Detailed descriptions of all business taxes</p>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card link-card h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-question-circle me-2"></i> Frequently Asked Questions</h5>
                                    <p class="card-text">Answers to common tax questions</p>
                                    <a href="#" class="btn btn-sm btn-outline-primary">View FAQs</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card link-card h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-search me-2"></i> AZ Tax Rate Look Up</h5>
                                    <p class="card-text">Look up tax rates by location</p>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Search Rates</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('home.footer')