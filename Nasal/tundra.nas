#setprop('/sim/model/battery/battconnectors/in', 0);
#    var p = '/controls/engines/engine[0]/starter';
#    var change = func setprop(p, getprop(p~1) and getprop(p~2));
#    setlistener(p~1, change);setlistener(p~2, change); change();
#setlistener("/controls/engines/engine[0]/magnetos", func {
#setprop ('/controls/engines/engine[0]/starter', 0);
#});
#Battery and Engine#
#var starter1 = getprop("/controls/engines/engine[0]/starter1");
#var starter2 = getprop("/controls/engines/engine[0]/starter2");
#if (starter1 = 1) {
#if (starter2 = 1) {
#setprop('/controls/engines/engine[0]/starter', 1) };
#};
setprop('/controls/lighting/landing-lights', 0);
global_system = func{



  if(getprop("/systems/electrical/outputs/master-avionics") > 6){
    setprop("/instrumentation/attitude-indicator/spin",10);
  }else{
    setprop("/instrumentation/attitude-indicator/spin",0);
  }



  settimer(global_system, 0);

}


