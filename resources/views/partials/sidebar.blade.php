<div class="sidebar-module">
                <h4>Teams</h4>
                @foreach($teams as $team)
                    <li>
                        <a href="/news/team/{{ $team->name }}"> {{ $team->name }}</a>
                    </li>

                @endforeach
                 
             </div>
             <div class="sidebar-module">
             </div>
