^k::


Loop
{
Send {m} ;Open Map
Sleep 1500
MouseMove, 900, 600, 2
Sleep 200
MouseClick, left
Sleep 1000
MouseMove, 900, 1030, 2
Sleep 2000
MouseMove, 5, 950, 2
Sleep 2000
MouseMove, 920, 275, 2
Sleep 100
MouseClick, left
Sleep 200
MouseMove 1621, 895, 2
Sleep 1000
MouseClick, left
Sleep 190000 ;Time it takes to relaunch 1000 = 1s
}
^j::ExitApp