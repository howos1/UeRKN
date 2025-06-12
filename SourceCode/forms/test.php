<?php
namespace app\forms;

use std, gui, framework, app;


class test extends AbstractForm
{

    /**
     * @event unblockButton.click-Left 
     */
    function doUnblockButtonClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event rect.click-Left 
     */
    function doRectClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event button5.click-Left 
     */
    function doButton5ClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event button6.click-Left 
     */
    function doButton6ClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $e = null)
    {    
        file_put_contents("test.txt", "1");
    }

    /**
     * @event button7.click-Left 
     */
    function doButton7ClickLeft(UXMouseEvent $e = null)
    {    
        
    }


}
