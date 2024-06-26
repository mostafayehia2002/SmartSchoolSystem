<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">SchoLink</h4>
        </div>
        @if (app()->getLocale() == 'en')
            <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
            </div>
        @else
            <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-right'></i>
            </div>
        @endif
    </div>
    <!--navigation-->
    @auth('admin')
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">{{ __('sidbar.home') }}</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.registers.index') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">{{ __('sidbar.requests') }}</div>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">{{ __('sidbar.media') }}</div>
                </a>

                <ul>
                    @foreach (\App\Models\Category::all() as $category)
                        <li><a href="{{ route('admin.' . $category->getTranslation('name', 'en') . '.index') }}"><i
                                    class="bx bx-right-arrow-alt"></i>{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="{{ route('admin.levels.index') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">{{ __('sidbar.levels') }}</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.classes.index') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">{{ __('sidbar.classes') }}</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.subjects.index') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">{{ __('sidbar.subjects') }}</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.teachers.index') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">{{ __('sidbar.teachers') }}</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.class_teachers.index') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">{{ __('sidbar.class_teachers') }}</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.students.index') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">{{ __('sidbar.students') }}</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.settings.index') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">{{ __('sidbar.settings') }}</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.admins.index') }}">
                    <div class="parent-icon"><i class="fadeIn animated bx bx-street-view"></i>
                    </div>
                    <div class="menu-title"> {{ __('sidbar.admins') }}</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.roles.index') }}">
                    <div class="parent-icon"><i class="fadeIn animated bx bx-detail"></i>
                    </div>
                    <div class="menu-title">{{ __('sidbar.roles') }}</div>
                </a>
            </li>

        </ul>
        @elseauth('teacher')
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('teacher.dashboard') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">{{ __('sidbar.home') }}</div>
                </a>
            </li>
            <li>
                <a href="{{ route('teacher.subjects.index') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">{{ __('sidbar.subjects') }}</div>
                </a>
            </li>
            <li>
                <a href="{{ route('teacher.classes.index') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">{{ __('sidbar.classes') }}</div>
                </a>
            </li>
            <li>
                <a href="{{ route('teacher.timetable.index') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">{{ __('sidbar.timetable') }}</div>
                </a>
            </li>
            <li>
                <a href="{{ route('teacher.attendance.index') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">{{ __('sidbar.attendance') }}</div>
                </a>
            </li>
            <li>
                <a href="{{ route('teacher.materials.index') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">{{ __('sidbar.materials') }}</div>
                </a>
            </li>
            <li>
                <a href="{{ route('teacher.assignments.index') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">{{ __('sidbar.assignments') }}</div>
                </a>
            </li>
{{--            <li>--}}
{{--                <a href="javascript:;" class="has-arrow">--}}
{{--                    <div class="parent-icon"><i class='bx bx-home-circle'></i>--}}
{{--                    </div>--}}
{{--                    <div class="menu-title">Dashboard</div>--}}
{{--                </a>--}}
{{--                <ul>--}}
{{--                    <li><a href="index.html"><i class="bx bx-right-arrow-alt"></i>Default</a>--}}
{{--                    </li>--}}
{{--                    <li><a href="index2.html"><i class="bx bx-right-arrow-alt"></i>Alternate</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
        </ul>
    @endauth
    <!--end navigation-->
</div>
