<?xml version="1.0"?>
<!-- Generated by Aero-Matic v 1.1

     Inputs:
                horsepower: 100
                     pitch: fixed
            max engine rpm: 2700
        prop diameter (ft): 3.281

     Outputs:
              max prop rpm: 5718.68
                gear ratio:    0.47
                       Cp0: 0.070256
                       Ct0: 0.098359
       static thrust (lbs):  263.77
-->

<propeller name="prop">
  <ixx>   0.15 </ixx>
  <diameter unit="IN">  39.4 </diameter>
  <numblades> 4 </numblades>
  <gearratio>  0.47 </gearratio>
  <p_factor>   3.11 </p_factor>

  <table name="C_THRUST" type="internal">
     <tableData>
       0.0   0.1072
       0.1   0.1028
       0.2   0.0984
       0.3   0.0905
       0.4   0.0812
       0.5   0.0716
       0.6   0.0579
       0.7   0.0440
       0.8   0.0238
       1.0  -0.0081
       1.2  -0.0422
       1.4  -0.0759
     </tableData>
  </table>


  <table name="C_POWER" type="internal">
     <tableData>
       0.0   0.0720
       0.1   0.0720
       0.2   0.0703
       0.3   0.0686
       0.4   0.0646
       0.5   0.0592
       0.6   0.0544
       0.7   0.0457
       0.8   0.0373
       1.0   0.0133
       1.2  -0.0213
       1.4  -0.0641
       1.6  -0.1088
     </tableData>
  </table>

<!-- thrust effects of helical tip Mach -->
<table name="CT_MACH" type="internal">
  <tableData>
    0.85   1.0
    1.05   0.8
  </tableData>
</table>

<!-- power-required effects of helical tip Mach -->
<table name="CP_MACH" type="internal">
  <tableData>
    0.85   1.0
    1.05   1.8
    2.00   1.4
  </tableData>
</table>

</propeller>
