<?php
class Agua{
    function getEstado(float $temperatura): string{
        if (is_float($temperatura) || is_int($temperatura)) {
        
            if ($temperatura <=0) return 'Sólido';
            if (0 < $temperatura && $temperatura <100) return 'Líquido';
            if (100 <= $temperatura ) return 'Gaseoso es acá';

    } else {
        return NULL;
        }
    }
    
}

