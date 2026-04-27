<?php
session_start();
require 'db.php';
header('Content-Type: application/json');

if (!isset($_SESSION['admin_logged_in'])) {
    echo json_encode(['status' => 'error', 'message' => 'Unauthorized']);
        exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['action'] ?? '') === 'save_match') {
            try {
                    $title = $_POST['matchTitle'] ?? 'OFFICIAL MATCH';
                            $nameA = $_POST['nameA'] ?? 'HOME';
                                    $nameB = $_POST['nameB'] ?? 'GUEST';
                                            $setsA = (int)$_POST['setsA'];
                                                    $setsB = (int)$_POST['setsB'];
                                                            $log   = $_POST['matchLog'] ?? '[]';
                                                                    $user  = $_SESSION['username'] ?? 'Unknown';

                                                                            $stmt = $pdo->prepare("INSERT INTO matches (match_title, team_a_name, team_b_name, home_sets, away_sets, match_log, created_by) VALUES (?, ?, ?, ?, ?, ?, ?)");
                                                                                    $stmt->execute([$title, $nameA, $nameB, $setsA, $setsB, $log, $user]);

                                                                                            echo json_encode(['status' => 'success']);
                                                                                                } catch (Exception $e) {
                                                                                                        echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
                                                                                                            }
                                                                                                                exit;
                                                                                                                }
                                                                                                                ?>
                                                                                                                
