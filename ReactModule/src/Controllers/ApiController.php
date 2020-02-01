<?php
/**
 * MIT License
 *
 * Copyright (c) 2020 DW Web-Engineering
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace Modules\ReactModule\Controllers;


/**
 * Class ApiController
 * @package Modules\Dashboard\Controllers
 */
class ApiController extends \Controllers\ApiController
{
    /**
     * @see fronted/IndexController/indexAction/TestAction.js
     */
    public function indexAction(): void
    {
        $this->redirect("reactModule", "index", "form");
    }

    /**
     * @param string $default
     */
    protected function getTranslationAction(string $default = "en_US"): void
    {
        parent::getTranslationAction($default);
    }

    /**
     *
     */
    protected function getMessageAction(): void
    {
        $this->addContext("message", "This message comes from ApiController::getMessageAction()");
    }
}
