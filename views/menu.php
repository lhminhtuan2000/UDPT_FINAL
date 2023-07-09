<?php if ($_SESSION['user']['Role'] === 'Admin'): ?>
    <li class="nav-item <?= $_GET['url'] === 'question/createQuestion' ? 'active' : '' ?>">
        <a class="nav-link" href="?url=question/createQuestion" aria-expanded="true">
            <i class="fas fa-fw fa-table"></i>
            <span>Đặt câu hỏi</span>
        </a>
    </li>
    <li class="nav-item <?= $_GET['url'] === 'question' || strpos($_GET['url'], 'question/viewAnswer') !== false || strpos($_GET['url'], 'question/viewEvaluate') !== false || strpos($_GET['url'], 'answer/evaluateAnswer') !== false || strpos($_GET['url'], 'answer/createAnswer') !== false ? 'active' : '' ?>">
        <a class="nav-link" href="?url=question" aria-expanded="true">
            <i class="fas fa-fw fa-table"></i>
            <span>Danh sách câu hỏi</span>
        </a>
    </li>
    <li class="nav-item <?= $_GET['url'] === 'answer' ? 'active' : '' ?>">
        <a class="nav-link" href="?url=answer" aria-expanded="true">
            <i class="fas fa-fw fa-table"></i>
            <span>Danh sách trả lời mới nhất</span>
        </a>
    </li>
    <li class="nav-item <?= $_GET['url'] === 'evaluate' ? 'active' : '' ?>">
        <a class="nav-link" href="?url=evaluate" aria-expanded="true">
            <i class="fas fa-fw fa-table"></i>
            <span>Danh sách đánh giá mới nhất</span>
        </a>
    </li>
    <li class="nav-item <?= $_GET['url'] === 'user' ? 'active' : '' ?>">
        <a class="nav-link" href="?url=user" aria-expanded="true">
            <i class="fas fa-fw fa-table"></i>
            <span>Danh sách người dùng</span>
        </a>
    </li>
<?php elseif ($_SESSION['user']['Role'] === 'Questioner'): ?>
    <li class="nav-item <?= $_GET['url'] === 'question/createQuestion' ? 'active' : '' ?>">
        <a class="nav-link" href="?url=question/createQuestion" aria-expanded="true">
            <i class="fas fa-fw fa-table"></i>
            <span>Đặt câu hỏi</span>
        </a>
    </li>
    <li class="nav-item <?= $_GET['url'] === 'question' || strpos($_GET['url'], 'question/viewAnswer') !== false || strpos($_GET['url'], 'answer/viewEvaluate') !== false || strpos($_GET['url'], 'answer/evaluateAnswer') !== false || strpos($_GET['url'], 'answer/createAnswer') !== false ? 'active' : '' ?>">
        <a class="nav-link" href="?url=question" aria-expanded="true">
            <i class="fas fa-fw fa-table"></i>
            <span>Danh sách câu hỏi</span>
        </a>
    </li>
<?php elseif ($_SESSION['user']['Role'] === 'Answerer'): ?>
    <li class="nav-item <?= $_GET['url'] === 'question' || strpos($_GET['url'], 'question/viewAnswer') !== false || strpos($_GET['url'], 'question/viewEvaluate') !== false || strpos($_GET['url'], 'answer/evaluateAnswer') !== false || strpos($_GET['url'], 'answer/createAnswer') !== false ? 'active' : '' ?>">
        <a class="nav-link" href="?url=question" aria-expanded="true">
            <i class="fas fa-fw fa-table"></i>
            <span>Danh sách câu hỏi</span>
        </a>
    </li>
<?php elseif ($_SESSION['user']['Role'] === 'Evaluater'): ?>
    <li class="nav-item <?= $_GET['url'] === 'question' || strpos($_GET['url'], 'question/viewAnswer') !== false || strpos($_GET['url'], 'question/viewEvaluate') !== false || strpos($_GET['url'], 'answer/evaluateAnswer') !== false || strpos($_GET['url'], 'answer/createAnswer') !== false ? 'active' : '' ?>">
        <a class="nav-link" href="?url=question" aria-expanded="true">
            <i class="fas fa-fw fa-table"></i>
            <span>Danh sách câu hỏi</span>
        </a>
    </li>
<?php elseif ($_SESSION['user']['Role'] === 'Viewer'): ?>
    <li class="nav-item <?= $_GET['url'] === 'question' || strpos($_GET['url'], 'question/viewAnswer') !== false || strpos($_GET['url'], 'question/viewEvaluate') !== false || strpos($_GET['url'], 'answer/evaluateAnswer') !== false || strpos($_GET['url'], 'answer/createAnswer') !== false ? 'active' : '' ?>">
        <a class="nav-link" href="?url=question" aria-expanded="true">
            <i class="fas fa-fw fa-table"></i>
            <span>Danh sách câu hỏi</span>
        </a>
    </li>
    <li class="nav-item <?= $_GET['url'] === 'answer' ? 'active' : '' ?>">
        <a class="nav-link" href="?url=answer" aria-expanded="true">
            <i class="fas fa-fw fa-table"></i>
            <span>Danh sách trả lời mới nhất</span>
        </a>
    </li>
    <li class="nav-item <?= $_GET['url'] === 'evaluate' ? 'active' : '' ?>">
        <a class="nav-link" href="?url=evaluate" aria-expanded="true">
            <i class="fas fa-fw fa-table"></i>
            <span>Danh sách đánh giá mới nhất</span>
        </a>
    </li>
<?php endif; ?>