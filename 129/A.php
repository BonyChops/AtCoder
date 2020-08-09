<?php
list($P,$Q,$R)=sscanf(trim(fgets(STDIN)),"%d %d %d");
print(min(min(abs($Q+$P),abs($R+$Q)),$P+$R));