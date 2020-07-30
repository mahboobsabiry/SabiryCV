<div class="fixed-sidebar-left">
	<ul class="nav navbar-nav side-nav nicescroll-bar">
		<li class="navigation-header">
			<span>Main</span> 
			<i class="zmdi zmdi-more"></i>
		</li>

		<!-- Dashboard -->
		<li>
			<a href="{{ route('admin.dashboard') }}" class="{{ request()->url() == route('admin.dashboard') ? 'active' : '' }}">
				<div class="pull-left">
					<i class="zmdi zmdi-landscape mr-20"></i>
					<span class="right-nav-text">Dashboard</span>
				</div>
				<div class="clearfix"></div>
			</a>
		</li>
		<!--/==/ End of Dashboard -->

		<!-- Settings -->
		<li>
			<a href="javascript:void(0);" class="{{ request()->url() == route('admin.settings') ? 'active' : '' }}" data-toggle="collapse" data-target="#dashboard_dr">
				<div class="pull-left">
					<i class="zmdi zmdi-settings mr-20"></i>
					<span class="right-nav-text">Catalogues</span>
				</div>
				<div class="pull-right">
					<i class="zmdi zmdi-caret-down"></i>
				</div>
				<div class="clearfix"></div>
			</a>
			<ul id="dashboard_dr" class="collapse collapse-level-1 {{ request()->url() == route('admin.settings') ? 'in' : '' }}">
				<li>
					<a href="{{ route('admin.settings') }}" class="{{ request()->url() == route('admin.settings') ? 'active-page' : '' }}">Settings</a>
				</li>
			</ul>
		</li>
		<!--/==/ End of Settings -->

		<!-- My Information -->
		<li>
			<a href="{{ route('admin.infos.index') }}" class="{{ request()->url() == route('admin.infos.index') ? 'active' : '' }}">
				<div class="pull-left">
					<i class="zmdi zmdi-apps mr-20"></i>
					<span class="right-nav-text">My Information</span>
				</div>
				<div class="clearfix"></div>
			</a>
		</li>
		<!--/==/ End of My Information -->

		<!-- My Education -->
		<li>
			<a href="{{ route('admin.education.index') }}" class="{{ request()->url() == route('admin.education.index') ? 'active' : '' }}">
				<div class="pull-left">
					<i class="icon-bag ml-0 mr-20"></i>
					<span class="right-nav-text">My Education</span>
				</div>
				<div class="clearfix"></div>
			</a>
		</li>
		<!--/==/ End of My Education -->

		<!-- My Experiences -->
		<li>
			<a href="{{ route('admin.experience.index') }}" class="{{ request()->url() == route('admin.experience.index') ? 'active' : '' }}">
				<div class="pull-left">
					<i class="icon-bag ml-0 mr-20"></i>
					<span class="right-nav-text">My Experiences</span>
				</div>
				<div class="clearfix"></div>
			</a>
		</li>
		<!--/==/ End of My Experiences -->

		<li><hr class="light-grey-hr mb-10"/></li>
		<li class="navigation-header">
			<span>component</span> 
			<i class="zmdi zmdi-more"></i>
		</li>
	</ul>
</div>
