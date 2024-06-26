@extends('layouts.index')
@section('structure')
<div class="clearfix"></div>
<!-- Header Container / End -->
<!-- Titlebar
================================================== -->
<div id="titlebar" class="property-titlebar margin-bottom-0">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="listings-list-with-sidebar.html" class="back-to-listings"></a>
				<div class="property-title">
					<h2>Selway Apartments <span class="property-badge">For Sale</span></h2>
					<span>
						<a href="#location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							7843 Durham Avenue, MD
						</a>
					</span>
				</div>
				<div class="property-pricing">
					<div class="property-price">$420,000</div>
					<div class="sub-price">$770 / sq ft</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Content
================================================== -->
<div class="container">
	<div class="row margin-bottom-50">
		<div class="col-md-12">
			<!-- Slider Container -->
			<div class="property-slider-container">
				<!-- Agent Widget -->
				<div class="agent-widget">
					<div class="agent-title">
						<div class="agent-photo"><img src="images/agent-avatar.jpg" alt="" /></div>
						<div class="agent-details">
							<h4><a href="#">Jennie Wilson</a></h4>
							<span><i class="sl sl-icon-call-in"></i>(123) 123-456</span>
						</div>
						<div class="clearfix"></div>
					</div>
					<input type="text" placeholder="Your Email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$">
					<input type="text" placeholder="Your Phone">
					<textarea>I'm interested in this property [ID 123456] and I'd like to know more details.</textarea>
					<button class="button fullwidth margin-top-5">Send Message</button>
				</div>
				<!-- Agent Widget / End -->
				<!-- Slider -->
				<div class="property-slider no-arrows">
					<a href="images/single-property-01.jpg" data-background-image="images/single-property-01.jpg" class="item mfp-gallery"></a>
					<a href="images/single-property-02.jpg" data-background-image="images/single-property-02.jpg" class="item mfp-gallery"></a>
					<a href="images/single-property-03.jpg" data-background-image="images/single-property-03.jpg" class="item mfp-gallery"></a>
					<a href="images/single-property-04.jpg" data-background-image="images/single-property-04.jpg" class="item mfp-gallery"></a>
					<a href="images/single-property-05.jpg" data-background-image="images/single-property-05.jpg" class="item mfp-gallery"></a>
					<a href="images/single-property-06.jpg" data-background-image="images/single-property-06.jpg" class="item mfp-gallery"></a>
				</div>
				<!-- Slider / End -->
			</div>
			<!-- Slider Container / End -->
			<!-- Slider Thumbs -->
			<div class="property-slider-nav">
				<div class="item"><img src="images/single-property-01.jpg" alt=""></div>
				<div class="item"><img src="images/single-property-02.jpg" alt=""></div>
				<div class="item"><img src="images/single-property-03.jpg" alt=""></div>
				<div class="item"><img src="images/single-property-04.jpg" alt=""></div>
				<div class="item"><img src="images/single-property-05.jpg" alt=""></div>
				<div class="item"><img src="images/single-property-06.jpg" alt=""></div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<!-- Property Description -->
		<div class="col-lg-8 col-md-7">
			<div class="property-description">
				<!-- Main Features -->
				<ul class="property-main-features">
					<li>Area <span>1450 sq ft</span></li>
					<li>Rooms <span>4</span></li>
					<li>Bedrooms <span>2</span></li>
					<li>Bathrooms <span>1</span></li>
				</ul>
				<!-- Description -->
				<h3 class="desc-headline">Description</h3>
				<div class="show-more">
					<p>
						Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed fermentum, lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis mi tortor finibus turpis.
					</p>
					<p>
						 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod fringilla. Curabitur lobortis nunc velit, et fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet tristique augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur.
					</p>
					<p>
						Nam mattis lobortis felis eu blandit. Morbi tellus ligula, interdum sit amet ipsum et, viverra hendrerit lectus. Nunc efficitur sem vel est laoreet, sed bibendum eros viverra. Vestibulum finibus, ligula sed euismod tincidunt, lacus libero lobortis ligula, sit amet molestie ipsum purus ut tortor. Nunc varius, dui et sollicitudin facilisis, erat felis imperdiet felis, et iaculis dui magna vitae diam. Donec mattis diam nisl, quis ullamcorper enim malesuada non. Curabitur lobortis eu mauris nec vestibulum. Nam efficitur, ex ac semper malesuada, nisi odio consequat dui, hendrerit vulputate odio dui vitae massa. Aliquam tortor urna, tincidunt ut euismod quis, semper vel ipsum. Ut non vestibulum mauris. Morbi euismod, felis non hendrerit viverra, nunc sapien bibendum ligula, eget vehicula nunc dolor eu ex. Quisque in semper odio. Donec auctor blandit ligula. Integer id lectus non nibh vulputate efficitur quis at arcu.
					</p>
					<a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a>
				</div>
				<!-- Details -->
				<h3 class="desc-headline">Details</h3>
				<ul class="property-features margin-top-0">
					<li>Building Age: <span>2 Years</span></li>
					<li>Parking: <span>Attached Garage</span></li>
					<li>Cooling: <span>Central Cooling</span></li>
					<li>Heating: <span>Forced Air, Gas</span></li>
					<li>Sewer: <span>Public/City</span></li>
					<li>Water: <span>City</span></li>
					<li>Exercise Room: <span>Yes</span></li>
					<li>Storage Room: <span>Yes</span></li>
				</ul>
				<!-- Features -->
				<h3 class="desc-headline">Features</h3>
				<ul class="property-features checkboxes margin-top-0">
					<li>Air Conditioning</li>
					<li>Swimming Pool</li>
					<li>Central Heating</li>
					<li>Laundry Room</li>
					<li>Gym</li>
					<li>Alarm</li>
					<li>Window Covering</li>
					<li>Internet</li>
				</ul>
				<!-- Floorplans -->
				<h3 class="desc-headline no-border">Floorplans</h3>
				<!-- Accordion -->
				<div class="style-1 fp-accordion">
					<div class="accordion">
						<h3>First Floor <span>460 sq ft</span> <i class="fa fa-angle-down"></i> </h3>
						<div>
						<a class="floor-pic mfp-image" href="https://i.imgur.com/kChy7IU.jpg">
							<img src="https://i.imgur.com/kChy7IU.jpg" alt="">
						</a>
						<p>Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate aliquam egestas litora torquent conubia.</p>
						</div>
						<h3>Second Floor <span>440 sq ft</span> <i class="fa fa-angle-down"></i></h3>
						<div>
							<a class="floor-pic mfp-image" href="https://i.imgur.com/l2VNlwu.jpg">
								<img src="https://i.imgur.com/l2VNlwu.jpg" alt="">
							</a>
							<p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. Nullam laoreet, velit ut taciti sociosqu condimentum feugiat.</p>
						</div>
						<h3>Garage <span>140 sq ft</span> <i class="fa fa-angle-down"></i></h3>
						<div>
							<a class="floor-pic mfp-image" href="https://i.imgur.com/0zJYERy.jpg">
								<img src="https://i.imgur.com/0zJYERy.jpg" alt="">
							</a>
						</div>
					</div>
				</div>
				<!-- Video -->
				<h3 class="desc-headline no-border">Video</h3>
				<div class="responsive-iframe">
					<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/UPBJKppEXoQ?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				</div>
				<!-- Location -->
				<h3 class="desc-headline no-border" id="location">Location</h3>
				<div id="propertyMap-container">
					<div id="propertyMap" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div>
					<a href="#" id="streetView">Street View</a>
				</div>
				<!-- Similar Listings Container -->
				<h3 class="desc-headline no-border margin-bottom-35 margin-top-60">Similar Properties</h3>
				<!-- Layout Switcher -->
				<div class="layout-switcher hidden"><a href="#" class="list"><i class="fa fa-th-list"></i></a></div>
				<div class="listings-container list-layout">
					<!-- Listing Item -->
					<div class="listing-item">
						<a href="#" class="listing-img-container">
							<div class="listing-badges">
								<span>For Rent</span>
							</div>
							<div class="listing-img-content">
								<span class="listing-price">$1700 <i>monthly</i></span>
								<span class="like-icon"></span>
							</div>
							<img src="images/listing-03.jpg" alt="">
						</a>
						<div class="listing-content">
							<div class="listing-title">
								<h4><a href="#">Meridian Villas</a></h4>
								<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
									<i class="fa fa-map-marker"></i>
									778 Country St. Panama City, FL
								</a>
								<a href="#" class="details button border">Details</a>
							</div>
							<ul class="listing-details">
								<li>1450 sq ft</li>
								<li>1 Bedroom</li>
								<li>2 Rooms</li>
								<li>2 Rooms</li>
							</ul>
							<div class="listing-footer">
								<a href="#"><i class="fa fa-user"></i> Chester Miller</a>
								<span><i class="fa fa-calendar-o"></i> 4 days ago</span>
							</div>
						</div>
						<!-- Listing Item / End -->
					</div>
					<!-- Listing Item / End -->
					<!-- Listing Item -->
					<div class="listing-item">
						<a href="#" class="listing-img-container">
							<div class="listing-badges">
								<span>For Sale</span>
							</div>
							<div class="listing-img-content">
								<span class="listing-price">$420,000 <i>$770 / sq ft</i></span>
								<span class="like-icon"></span>
							</div>
							<div><img src="images/listing-04.jpg" alt=""></div>
						</a>
						<div class="listing-content">
							<div class="listing-title">
								<h4><a href="#">Selway Apartments</a></h4>
								<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
									<i class="fa fa-map-marker"></i>
									33 William St. Northbrook, IL
								</a>
								<a href="#" class="details button border">Details</a>
							</div>
							<ul class="listing-details">
								<li>540 sq ft</li>
								<li>1 Bedroom</li>
								<li>3 Rooms</li>
								<li>2 Bathroom</li>
							</ul>
							<div class="listing-footer">
								<a href="#"><i class="fa fa-user"></i> Kristen Berry</a>
								<span><i class="fa fa-calendar-o"></i> 3 days ago</span>
							</div>
						</div>
						<!-- Listing Item / End -->
					</div>
					<!-- Listing Item / End -->
					<!-- Listing Item -->
					<div class="listing-item">
						<a href="#" class="listing-img-container">
							<div class="listing-badges">
								<span>For Sale</span>
							</div>
							<div class="listing-img-content">
								<span class="listing-price">$535,000 <i>$640 / sq ft</i></span>
								<span class="like-icon"></span>
							</div>
							<img src="images/listing-05.jpg" alt="">
						</a>
						<div class="listing-content">
							<div class="listing-title">
								<h4><a href="#">Oak Tree Villas</a></h4>
								<a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">
									<i class="fa fa-map-marker"></i>
									71 Lower River Dr. Bronx, NY
								</a>
								<a href="#" class="details button border">Details</a>
							</div>
							<ul class="listing-details">
								<li>350 sq ft</li>
								<li>1 Bedroom</li>
								<li>2 Rooms</li>
								<li>1 Bathroom</li>
							</ul>
							<div class="listing-footer">
								<a href="#"><i class="fa fa-user"></i> Mabel Gagnon</a>
								<span><i class="fa fa-calendar-o"></i> 4 days ago</span>
							</div>
						</div>
						<!-- Listing Item / End -->
					</div>
					<!-- Listing Item / End -->

				</div>
				<!-- Similar Listings Container / End -->

			</div>
		</div>
		<!-- Property Description / End -->
		<!-- Sidebar -->
		<div class="col-lg-4 col-md-5">
			<div class="sidebar sticky right">
				<!-- Widget -->
				<div class="widget margin-bottom-30">
					<button class="widget-button with-tip" data-tip-content="Print"><i class="sl sl-icon-printer"></i></button>
					<button class="widget-button with-tip" data-tip-content="Add to Bookmarks"><i class="fa fa-star-o"></i></button>
					<button class="widget-button with-tip compare-widget-button" data-tip-content="Add to Compare"><i class="icon-compare"></i></button>
					<div class="clearfix"></div>
				</div>
				<!-- Widget / End -->
				<!-- Widget -->
				<div class="widget">
					<h3 class="margin-bottom-30 margin-top-35">Mortgage Calculator</h3>
					<!-- Mortgage Calculator -->
					<form action="javascript:void(0);" autocomplete="off" class="mortgageCalc" data-calc-currency="USD">
						<div class="calc-input">
							<div class="pick-price tip" data-tip-content="Set This Property Price"></div>
						    <input type="text" id="amount" name="amount" placeholder="Sale Price" required>
						    <label for="amount" class="fa fa-usd"></label>
						</div>
						<div class="calc-input">
						    <input type="text" id="downpayment" placeholder="Down Payment">
						    <label for="downpayment" class="fa fa-usd"></label>
						</div>
						<div class="calc-input">
							<input type="text" id="years" placeholder="Loan Term (Years)" required>
							<label for="years" class="fa fa-calendar-o"></label>
						</div>
						<div class="calc-input">
							<input type="text" id="interest" placeholder="Interest Rate" required>
							<label for="interest" class="fa fa-percent"></label>
						</div>
						<button class="button calc-button" formvalidate>Calculate</button>
						<div class="calc-output-container"><div class="notification success">Monthly Payment: <strong class="calc-output"></strong></div></div>
					</form>
					<!-- Mortgage Calculator / End -->
				</div>
				<!-- Widget / End -->
				<!-- Widget -->
				<div class="widget">
					<h3 class="margin-bottom-35">Featured Properties</h3>
					<div class="listing-carousel outer">
						<!-- Item -->
						<div class="item">
							<div class="listing-item compact">
								<a href="#" class="listing-img-container">
									<div class="listing-badges">
										<span class="featured">Featured</span>
										<span>For Sale</span>
									</div>
									<div class="listing-img-content">
										<span class="listing-compact-title">Eagle Apartments <i>$275,000</i></span>
										<ul class="listing-hidden-content">
											<li>Area <span>530 sq ft</span></li>
											<li>Rooms <span>3</span></li>
											<li>Beds <span>1</span></li>
											<li>Baths <span>1</span></li>
										</ul>
									</div>
									<img src="images/listing-01.jpg" alt="">
								</a>
							</div>
						</div>
						<!-- Item / End -->
						<!-- Item -->
						<div class="item">
							<div class="listing-item compact">
								<a href="#" class="listing-img-container">
									<div class="listing-badges">
										<span class="featured">Featured</span>
										<span>For Sale</span>
									</div>
									<div class="listing-img-content">
										<span class="listing-compact-title">Selway Apartments <i>$245,000</i></span>
										<ul class="listing-hidden-content">
											<li>Area <span>530 sq ft</span></li>
											<li>Rooms <span>3</span></li>
											<li>Beds <span>1</span></li>
											<li>Baths <span>1</span></li>
										</ul>
									</div>
									<img src="images/listing-02.jpg" alt="">
								</a>
							</div>
						</div>
						<!-- Item / End -->
						<!-- Item -->
						<div class="item">
							<div class="listing-item compact">
								<a href="#" class="listing-img-container">
									<div class="listing-badges">
										<span class="featured">Featured</span>
										<span>For Sale</span>
									</div>
									<div class="listing-img-content">
										<span class="listing-compact-title">Oak Tree Villas <i>$325,000</i></span>
										<ul class="listing-hidden-content">
											<li>Area <span>530 sq ft</span></li>
											<li>Rooms <span>3</span></li>
											<li>Beds <span>1</span></li>
											<li>Baths <span>1</span></li>
										</ul>
									</div>
									<img src="images/listing-03.jpg" alt="">
								</a>
							</div>
						</div>
						<!-- Item / End -->
					</div>
				</div>
				<!-- Widget / End -->
				<!-- Widget -->
				<div class="widget margin-bottom-40">
					<h3 class="margin-top-0 margin-bottom-35">Find New Home</h3>
					<!-- Row -->
					<div class="row with-forms">
						<!-- Status -->
						<div class="col-md-12">
							<select data-placeholder="Any Status" class="chosen-select-no-single" >
								<option>Any Status</option>
								<option>For Sale</option>
								<option>For Rent</option>
							</select>
						</div>
					</div>
					<!-- Row / End -->
					<!-- Row -->
					<div class="row with-forms">
						<!-- Type -->
						<div class="col-md-12">
							<select data-placeholder="Any Type" class="chosen-select-no-single" >
								<option>Any Type</option>
								<option>Apartments</option>
								<option>Houses</option>
								<option>Commercial</option>
								<option>Garages</option>
								<option>Lots</option>
							</select>
						</div>
					</div>
					<!-- Row / End -->
					<!-- Row -->
					<div class="row with-forms">
						<!-- States -->
						<div class="col-md-12">
							<select data-placeholder="All States" class="chosen-select" >
								<option>All States</option>
								<option>Alabama</option>
								<option>Alaska</option>
								<option>Arizona</option>
								<option>Arkansas</option>
								<option>California</option>
								<option>Colorado</option>
								<option>Connecticut</option>
								<option>Delaware</option>
								<option>Florida</option>
								<option>Georgia</option>
								<option>Hawaii</option>
								<option>Idaho</option>
								<option>Illinois</option>
								<option>Indiana</option>
								<option>Iowa</option>
								<option>Kansas</option>
								<option>Kentucky</option>
								<option>Louisiana</option>
								<option>Maine</option>
								<option>Maryland</option>
								<option>Massachusetts</option>
								<option>Michigan</option>
								<option>Minnesota</option>
								<option>Mississippi</option>
								<option>Missouri</option>
								<option>Montana</option>
								<option>Nebraska</option>
								<option>Nevada</option>
								<option>New Hampshire</option>
								<option>New Jersey</option>
								<option>New Mexico</option>
								<option>New York</option>
								<option>North Carolina</option>
								<option>North Dakota</option>
								<option>Ohio</option>
								<option>Oklahoma</option>
								<option>Oregon</option>
								<option>Pennsylvania</option>
								<option>Rhode Island</option>
								<option>South Carolina</option>
								<option>South Dakota</option>
								<option>Tennessee</option>
								<option>Texas</option>
								<option>Utah</option>
								<option>Vermont</option>
								<option>Virginia</option>
								<option>Washington</option>
								<option>West Virginia</option>
								<option>Wisconsin</option>
								<option>Wyoming</option>
							</select>
						</div>
					</div>
					<!-- Row / End -->
					<!-- Row -->
					<div class="row with-forms">
						<!-- Cities -->
						<div class="col-md-12">
							<select data-placeholder="All Cities" class="chosen-select" >
								<option>All Cities</option>
								<option>New York</option>
								<option>Los Angeles</option>
								<option>Chicago</option>
								<option>Brooklyn</option>
								<option>Queens</option>
								<option>Houston</option>
								<option>Manhattan</option>
								<option>Philadelphia</option>
								<option>Phoenix</option>
								<option>San Antonio</option>
								<option>Bronx</option>
								<option>San Diego</option>
								<option>Dallas</option>
								<option>San Jose</option>
							</select>
						</div>
					</div>
					<!-- Row / End -->
					<!-- Row -->
					<div class="row with-forms">
						<!-- Min Area -->
						<div class="col-md-6">
							<select data-placeholder="Beds" class="chosen-select-no-single" >
								<option label="blank"></option>
								<option>Beds (Any)</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
						<!-- Max Area -->
						<div class="col-md-6">
							<select data-placeholder="Baths" class="chosen-select-no-single" >
								<option label="blank"></option>
								<option>Baths (Any)</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
					</div>
					<!-- Row / End -->
					<br>
					<!-- Area Range -->
					<div class="range-slider">
						<label>Area Range</label>
						<div id="area-range" data-min="0" data-max="1500" data-unit="sq ft"></div>
						<div class="clearfix"></div>
					</div>
					<br>
					<!-- Price Range -->
					<div class="range-slider">
						<label>Price Range</label>
						<div id="price-range" data-min="0" data-max="400000" data-unit="$"></div>
						<div class="clearfix"></div>
					</div>
					<!-- More Search Options -->
					<a href="#" class="more-search-options-trigger margin-bottom-10 margin-top-30" data-open-title="Additional Features" data-close-title="Additional Features"></a>
					<div class="more-search-options relative">
						<!-- Checkboxes -->
						<div class="checkboxes one-in-row margin-bottom-10">

							<input id="check-2" type="checkbox" name="check">
							<label for="check-2">Air Conditioning</label>

							<input id="check-3" type="checkbox" name="check">
							<label for="check-3">Swimming Pool</label>

							<input id="check-4" type="checkbox" name="check" >
							<label for="check-4">Central Heating</label>

							<input id="check-5" type="checkbox" name="check">
							<label for="check-5">Laundry Room</label>


							<input id="check-6" type="checkbox" name="check">
							<label for="check-6">Gym</label>

							<input id="check-7" type="checkbox" name="check">
							<label for="check-7">Alarm</label>

							<input id="check-8" type="checkbox" name="check">
							<label for="check-8">Window Covering</label>
						</div>
						<!-- Checkboxes / End -->
					</div>
					<!-- More Search Options / End -->
					<button class="button fullwidth margin-top-30">Search</button>
				</div>
				<!-- Widget / End -->
			</div>
		</div>
		<!-- Sidebar / End -->
	</div>
</div>
@endsection
